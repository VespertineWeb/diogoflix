<?php

namespace App\Http\Livewire;

use App\Models\PlaylistsModel;
use App\Models\VideosModel;
use App\Src\Youtube\GetPlaylists;
use App\Src\Youtube\GetVideos;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Import extends Component {

    public $message;
    public $imports = [];

    public function mount() {
    }

    public function render() {
        return view('admin.videos.import')->layout('layouts.app_admin');
    }

    public function import_playlists(GetPlaylists $getPlaylists) {
        // $json_playlists = Storage::get('json/playlists.json');
        // $result = json_decode($json_playlists, true);

        $result = $getPlaylists->get();
        Storage::put('scaf\\playlist\\playlist.json', json_encode($result));

        foreach ($result['items'] as $item) {
            $playlist_id = $item['id'];
            $insert = [
                'etag' => $item['etag'],
                'id_youtube' => $playlist_id,
                'title' => $item['snippet']['title'],
                'published_at' => Carbon::parse($item['snippet']['publishedAt']),
                'description' => $item['snippet']['description'],
                'thumbnail' => $item['snippet']['thumbnails']['maxres']['url'] ?? $item['snippet']['thumbnails']['default']['url'],
                'thumbnails' => isset($item['snippet']['thumbnails']) ? json_encode($item['snippet']['thumbnails']) : '',
            ];
            PlaylistsModel::updateOrCreate(['id_youtube' => $playlist_id], $insert);
        }
    }

    public function import() {
        $playlists = PlaylistsModel::withCount('videos_youtube_id')
            // ->having('videos_youtube_id_count', '>', 0)
            ->get();
        $youtube = new GetVideos();

        foreach ($playlists as $playlist) {
            $result = $youtube->get_by_playlist($playlist->id_youtube);

            Storage::put('scaf\\videos\\' . $playlist->id_youtube . '.json', json_encode($result));

            $erros = 0;
            $total = 0;
            $insert = [];
            foreach ($result['items'] as $item) {
                $video_id = $item['snippet']['resourceId']['videoId'];

                $total++;

                $thumbnail = '';
                if (isset($item['snippet']['thumbnails']['maxres'])) {
                    $thumbnail = $item['snippet']['thumbnails']['maxres']['url'];
                } elseif (isset($item['snippet']['thumbnails']['standard'])) {
                    $thumbnail = $item['snippet']['thumbnails']['standard']['url'];
                }

                if (isset($item['snippet']['publishedAt'])) {
                    $published_at = Carbon::parse($item['snippet']['publishedAt']);
                } else {
                    $published_at = '';
                }

                $insert = [
                    'etag' => $item['etag'],
                    'id_youtube' => $item['id'],
                    'published_at' => $published_at,
                    'title' => $item['snippet']['title'],
                    'description' => $item['snippet']['description'],
                    'thumbnail' => $thumbnail,
                    'thumbnails' => isset($item['snippet']['thumbnails']) ? json_encode($item['snippet']['thumbnails']) : '',
                    'playlistId' => $item['snippet']['playlistId'],
                    'position' => $item['snippet']['position'],
                    'videoId' => $item['snippet']['resourceId']['videoId'],
                ];

                try {
                    VideosModel::updateOrCreate(['videoId' => $video_id], $insert);
                } catch (Exception $e) {
                    $erros++;
                    Log::notice([$e->getMessage(), $published_at, $item['snippet']['publishedAt']]);
                }
            }

            $this->imports[] = $playlist->title . ' - ' . $total . " - Erros: {$erros}";
        }
    }
}

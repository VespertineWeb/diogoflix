<?php

namespace App\Http\Livewire;

use App\Models\PlaylistsModel;
use App\Models\VideosModel;
use App\Src\Youtube\GetVideos;
use Carbon\Carbon;
use Exception;
use Livewire\Component;

class Import extends Component {

    public $message;
    public $imports = [];

    public function mount() {
    }

    public function render() {
        return view('admin.videos.import')->layout('layouts.app_admin');
    }

    public function import() {
        $playlists = PlaylistsModel::withCount('videos_youtube_id')
            ->having('videos_youtube_id_count', '>', 0)
            ->get();
        $youtube = new GetVideos();

        // dd($playlists->toArray());

        foreach ($playlists as $playlist) {
            $result = $youtube->get_by_playlist($playlist->id_youtube);

            $total = 0;
            $insert = [];
            foreach ($result['items'] as $item) {
                $video_id = $item['snippet']['resourceId']['videoId'];

                $video = VideosModel::where('videoId', $video_id)->first();
                if (!$video) {
                    $total++;

                    $thumbnail = '';
                    if (isset($item['snippet']['thumbnails']['default'])) {
                        $thumbnail = $item['snippet']['thumbnails']['default']['url'];
                    } elseif (isset($item['snippet']['thumbnails']['standard'])) {
                        $thumbnail = $item['snippet']['thumbnails']['default']['url'];
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
                        VideosModel::create($insert);
                    } catch (Exception $e) {
                        dump($e->getMessage());

                        // dd($insert, $published_at, $item['snippet']['publishedAt']);
                    }
                }
            }
            $this->imports[] = $playlist->title . ' - ' . $total;
        }
    }
}

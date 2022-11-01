<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdateVideos;
use App\Http\Controllers\Controller;
use App\Models\PlaylistsModel;
use App\Models\VideosModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class VideosController extends Controller {

    private $dados;
    private $videos;

    public function __construct(VideosModel $videos) {
        $this->videos = $videos;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $filters = $request->except('_token');
        $this->dados['filters'] = $filters;

        $videos = $this->videos
            ->where(function ($query) use ($request) {
                if ($request->etag) {
                    $query->where('etag', $request->etag);
                }
            })
            ->latest()
            ->paginate();

        $this->dados['videos'] = $videos;
        return view('admin.videos.videos_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $this->dados['titulo'] = 'videos';
        return view('admin.videos.videos_create', $this->dados);
    }

    public function store(StoreUpdateVideos $request) {
        $this->videos->create($request->all());
        return redirect('admin/videos');
    }

    public function show($id) {
        if (!$videos = $this->videos->find($id)) {
            return redirect()->back();
        }

        $this->dados['titulo'] = 'videos';
        $this->dados['videos'] = $videos;
        return view('admin.videos.videos_show', $this->dados);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{videos}Model  $videos
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
        $videos = $this->videos->find($id);
        $this->dados['videos'] = $videos;
        $this->dados['titulo'] = 'videos';
        return view('admin.videos.videos_edit', $this->dados);
    }

    public function update(StoreUpdateVideos $request, $id) {
        $this->videos->find($id)->update($request->all());
        return redirect('admin/videos');
    }

    public function delete(Request $request, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            videosModel::where('id', $id)->delete();
            return redirect('/admin/videos');
        } else {
            $videos = videosModel::where('id', $id)->first();
            $this->dados['videos'] = $videos;
            $this->dados['titulo'] = 'videos';
            return view('admin/videos.videos_delete', $this->dados);
        }
    }
    public function import() {
        $json_playlists = Storage::get('json/playlists.json');
        $playlists = json_decode($json_playlists, true);
        foreach ($playlists['items'] as $item) {
            $playlist_id = $item['id'];
            $playlist = PlaylistsModel::where('id_youtube', $playlist_id)->first();
            if (!$playlist) {
                PlaylistsModel::insert([
                    'etag' => $item['etag'],
                    'id_youtube' => $playlist_id,
                    'title' => $item['snippet']['title'],
                    'published_at' => Carbon::parse($item['snippet']['publishedAt']),
                    'description' => $item['snippet']['description'],
                    'thumbnail' => $item['snippet']['thumbnails']['default']['url'],
                    'thumbnails' => isset($item['snippet']['thumbnails']) ? json_encode($item['snippet']['thumbnails']) : '',
                ]);
            }
        }



        $json_playlists = Storage::get('json/playlists.json');
        $playlists = json_decode($json_playlists, true);
    }
}

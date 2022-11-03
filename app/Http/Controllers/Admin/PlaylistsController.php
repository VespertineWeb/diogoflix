<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreUpdatePlaylists;
use App\Http\Controllers\Controller;
use App\Models\CategoriesModel;
use App\Models\PlaylistsModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

class PlaylistsController extends Controller {

    private $dados;
    private $playlists;

    public function __construct(PlaylistsModel $playlists) {
        $this->playlists = $playlists;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $filters = $request->except('_token');
        $this->dados['filters'] = $filters;

        $playlists = $this->playlists
            ->where(function ($query) use ($request) {
                if ($request->etag) {
                    $query->where('etag', $request->etag);
                }
            })
            ->with('category')
            ->withCount('videos_youtube_id')
            // ->having('videos_youtube_id_count', '>', 5)
            ->orderby('videos_youtube_id_count', 'desc')
            ->paginate();

        $this->dados['playlists'] = $playlists;
        return view('admin.playlists.playlists_list', $this->dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $this->dados['titulo'] = 'playlists';
        return view('admin.playlists.playlists_create', $this->dados);
    }

    public function store(StoreUpdatePlaylists $request) {
        $this->playlists->create($request->all());
        return redirect('admin/playlists');
    }

    public function show($id) {
        if (!$playlists = $this->playlists->find($id)) {
            return redirect()->back();
        }

        $this->dados['titulo'] = 'playlists';
        $this->dados['playlists'] = $playlists;
        return view('admin.playlists.playlists_show', $this->dados);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\{playlists}Model  $playlists
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
        $this->dados['categories'] = CategoriesModel::orderBy('name')->pluck('name', 'id');
        $playlists = $this->playlists->find($id);
        $this->dados['playlists'] = $playlists;
        return view('admin.playlists.playlists_edit', $this->dados);
    }

    public function update(Request $request, $id) {
        $post = [
            'status' => $request->status,
            'category_id' => $request->category_id,
        ];

        $this->playlists->find($id)->update($post);
        return redirect('admin/playlists');
    }

    public function delete(Request $request, $id) {
        if ($request->isMethod('post')) {
            $input = $request->except(['_token']);
            playlistsModel::where('id', $id)->delete();
            return redirect('/admin/playlists');
        } else {
            $playlists = playlistsModel::where('id', $id)->first();
            $this->dados['playlists'] = $playlists;
            $this->dados['titulo'] = 'playlists';
            return view('admin/playlists.playlists_delete', $this->dados);
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
    }
}

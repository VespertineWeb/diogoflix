<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistsModel extends Model {
    use HasFactory;

    protected $table = 'playlists';
    protected $primaryKey = 'id';
    // const CREATED_AT = 'creation_date';
    // const UPDATED_AT = 'last_update';

    protected $fillable = ['etag', 'id_youtube', 'published_at', 'title', 'description', 'thumbnail', 'thumbnails', 'status',];
    protected $date = ['created_at', 'updated_at'];

    public function scopeGetAll($query, $post) {
        if ($post->input('etag') != '') {
            $query->where('etag', 'LIKE', '%' . $post->input('etag') . '%');
        }

        $dados =  $query
            ->orderBy('etag')
            ->paginate(10);
        return $dados;
    }

    /**
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return []
     */
    public function scopeGetArray($query) {
        $dados =  $query->get();

        $result = [];
        $result[''] = 'Selecione!';
        foreach ($dados as $dado) {
            $result[$dado->id] = $dado->etag;
        }

        return $result;
    }
}

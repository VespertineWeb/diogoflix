<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaylistsModel extends Model {
    use HasFactory;

    protected $table = 'playlists';
    protected $primaryKey = 'id';

    protected $fillable = ['etag', 'id_youtube', 'published_at', 'title', 'description', 'thumbnail', 'thumbnails', 'status',];
    protected $date = ['created_at', 'updated_at'];


    public function videos_youtube_id() {
        return $this->hasMany(VideosModel::class, 'playlistId', 'id_youtube');
    }
}

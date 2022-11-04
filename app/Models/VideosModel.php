<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideosModel extends Model {
    use HasFactory;

    protected $table = 'videos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'etag', 'id_youtube', 'published_at',
        'title', 'description', 'thumbnail', 'thumbnails', 'status',
        'playlistId', 'position', 'videoId',
        'embedHtml',
    ];

    protected $date = ['created_at', 'updated_at'];
}

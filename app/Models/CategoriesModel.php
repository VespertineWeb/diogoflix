<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model {
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'image', 'status',];
    protected $date = ['created_at', 'updated_at'];

    public function playlists() {
        return $this->hasMany(PlaylistsModel::class, 'category_id', 'id');
    }
}

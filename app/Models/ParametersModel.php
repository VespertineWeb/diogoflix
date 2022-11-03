<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParametersModel extends Model {
    use HasFactory;

    protected $table = 'parameters';
    protected $primaryKey = 'id';

    protected $fillable = [
        'key_api_google', 'title', 'logo', 'sobre',
        'pix_client_id',
        'pix_client_secret',
        'pix_key_file',
        'pix_crt_file',
        'pix_url_gerencianet',
        'gerencianet_chave_pix',
        'termo_compra',
        'usa_indicacao',
        'percent_indicacao',
        'assas_token',
        'assas_url',
        'youtube_channel_id'
    ];
    protected $date = ['created_at', 'updated_at'];
}

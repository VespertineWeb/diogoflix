<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id('id');
            $table->string('title')->nullable();
            $table->string('logo')->nullable();
            $table->string('key_api_google')->nullable();
            $table->string('youtube_channel_id')->nullable();
            $table->string('youtube_channel_title')->default('Instituto Diogo Melo de Harmonização Facial');
            $table->string('assas_token')->nullable();
            $table->string('assas_url')->nullable();
            $table->longText('pix_client_id')->nullable();
            $table->longText('pix_client_secret')->nullable();
            $table->longText('pix_key_file')->nullable();
            $table->longText('pix_crt_file')->nullable();
            $table->longText('pix_url_gerencianet')->nullable();
            $table->longText('gerencianet_chave_pix')->nullable();
            $table->timestamps();
        });

        DB::table('parameters')->insert(['id' => 1,]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('parameters');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('etag')->nullable();
            $table->string('id_youtube')->nullable();
            $table->timestamp('published_at');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longText('thumbnails')->nullable();
            $table->string('status')->default('active');
            $table->string('playlistId')->nullable();
            $table->integer('position')->nullable();
            $table->string('videoId')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('playlists');
    }
};

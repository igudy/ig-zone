<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('genre_id')->constrained();
            $table->string('post_title');
            $table->string('post_user');
            $table->date('post_date');
            $table->string('post_image')->nullable();
            $table->string('post_content');
            $table->string('post_tag');
            $table->integer('post_comment_count')->nullable();
            $table->string('post_status');
            $table->integer('post_view_count')->nullable();
            $table->string('post_audio_thumbnail')->nullable();
            $table->string('post_video_thumbnail')->nullable();
            $table->string('post_type')->nullable();
            $table->string('post_audio')->nullable();
            $table->string('post_video')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

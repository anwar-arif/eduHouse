<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('post_id');
            $table->integer('like_count')->default(0) ;
            $table->integer('comment_count')->default(0) ;
            $table->string('post_title') ;
            $table->string('post_tag') ;
            $table->mediumText('post_content') ;
            $table->integer('user_id') ;
            $table->integer('series_id')->nullable();
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
        Schema::drop('posts');
    }
}

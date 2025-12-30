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
            $table->string('title');
            $table->boolean('slide');
            $table->integer('category');
            $table->integer('subcate')->nullable(true);
            $table->string('date_kh');
            $table->string('time')->nullable(true);
            $table->string('time_slide')->nullable(true);
            $table->string('day')->nullable(true);
            $table->boolean('status');
            $table->string('photo');
            $table->text('content');
            $table->integer('user_id');
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

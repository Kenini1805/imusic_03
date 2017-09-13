<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug_name');
            $table->string('path');
            $table->string('path_image_video');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('genre_id');
            $table->unsignedInteger('artist_id');
            $table->unsignedInteger('user_id');
            $table->tinyInteger('status');
            $table->bigInteger('view_count');
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
        Schema::dropIfExists('files');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->text('litleDescription');
            $table->text('description');
            $table->string('address');
            $table->integer('city_id');
            $table->integer('placeType_id');
            $table->integer('park_id');
            $table->string('url');
            $table->string('coordinates');
            $table->string('cover_image');
            $table->integer('votes');
            $table->integer('likes');
            $table->integer('dislikes');
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
        Schema::dropIfExists('places');
    }
}

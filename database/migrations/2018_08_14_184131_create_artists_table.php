<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artistname');
            $table->string('image')->nullable();
            $table->string('hometown')->nullable();
            $table->string('yearjoined')->nullable();
            $table->string('reppin')->nullable();
            $table->text('body')->nullable();
            $table->string('slug')->unique();
            $table->integer('user_id')->nullable();
            $table->tinyInteger('featured')->nullable();
            $table->integer('updatedby_id')->nullable();
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
        Schema::dropIfExists('artists');
    }
}

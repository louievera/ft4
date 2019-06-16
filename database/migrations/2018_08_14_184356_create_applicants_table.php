<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usr_id')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('birthdate')->nullable();
            $table->string('address');
            $table->string('email');
            $table->string('fb')->nullable();
            $table->string('phone');
            $table->string('emceename');
            $table->string('division')->nullable();
            $table->text('lyrics01')->nullable();
            $table->text('lyrics02')->nullable();
            $table->text('song')->nullable();
            $table->text('links')->nullable();
            $table->string('favemcees')->nullable();
            $table->string('favalbums')->nullable();
            $table->string('favbattles')->nullable();
            $table->text('favlines')->nullable();
            $table->text('description')->nullable();
            $table->string('occupation')->nullable();
            $table->text('reasonsforauditioning')->nullable();
            $table->text('otherinterests')->nullable();
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
        Schema::dropIfExists('applicants');
    }
}

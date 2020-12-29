<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->unsignedBigInteger('role_id');
            $table->string('name');
            $table->integer('shirt');
            $table->string('img');
            $table->integer('matches')->default(0);
            $table->integer('goals')->default(0);
            $table->integer('assists')->default(0);
            $table->boolean('motm')->default(false);
            $table->float('rating')->default(0);
            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('clubs');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}

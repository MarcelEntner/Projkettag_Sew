<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Beitrag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Beitrag', function (Blueprint $table) {
            $table->string('Foto')->nullable();
            $table->string('Video')->nullable();
            $table->string('Titel')->nullable();
            $table->string('Beschreibung')->nullable();
            $table->string('Ort')->nullable();
            $table->string('Zielgruppe')->nullable();
            $table->String('Interaktion')->nullable();
            $table->boolean('ZurPlaylisthinzufügen')->nullable();
            $table->dateTime('ErstellDatum')->nullable();
            $table->dateTime('ErstellUhrzeit')->nullable();
            $table->dateTime('LöschDatum')->nullable();
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
        //
    }
}

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
            $table->binary('Foto')->nullable();
            $table->string('Video')->nullable();
            $table->string('Titel')->nullable();
            $table->string('Beschreibung')->nullable();
            $table->string('Ort')->nullable();
            $table->string('Zielgruppe')->nullable();
            $table->string('Interaktion')->nullable();
            $table->string('ZurPlaylisthinzufügen')->nullable();
            $table->date('ErstellDatum')->nullable();
            $table->time('ErstellZeit')->nullable();
            $table->date('LöschDatum')->nullable();
            $table->boolean('Facebook')->nullable();
            $table->boolean('Instagram')->nullable();
            $table->boolean('Twitter')->nullable();
            $table->boolean('Youtube')->nullable();
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

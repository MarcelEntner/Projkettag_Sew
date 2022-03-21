<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoginDaten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoginDaten', function (Blueprint $table) {
            $table->string('FB_Benutzername')->nullable();
            $table->string('FB_Passwort')->nullable();
            $table->string('IG_Benutzername')->nullable();
            $table->string('IG_Passwort')->nullable();
            $table->string('TW_Benutzername')->nullable();
            $table->string('TW_Passwort')->nullable();
            $table->string('YT_Benutzername')->nullable();
            $table->string('YT_Passwort')->nullable();
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

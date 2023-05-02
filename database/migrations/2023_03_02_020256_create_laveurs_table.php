<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaveursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laveurs', function (Blueprint $table) {
            $table->integer('idlav')->autoIncrement();
            $table->string('Nom');
            $table->string('Prenom');
            $table->integer('Telephone');
            $table->string('Adresse');
            $table->char('Sexe');
            $table->date('DateNaiss');
            $table->char('eMail');
            $table->char('passe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laveurs');
    }
}

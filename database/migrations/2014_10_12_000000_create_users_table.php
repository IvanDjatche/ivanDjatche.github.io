<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('Nom');
            $table->string('Prenom');
            $table->integer('Telephone');
            $table->string('Ville');
            $table->string('Adresse');
            $table->string('Sexe');
            $table->date('DateNaiss');
            $table->char('email');
            $table->integer('Role');
            $table->char('password');
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
        Schema::dropIfExists('users'); 
    }
}

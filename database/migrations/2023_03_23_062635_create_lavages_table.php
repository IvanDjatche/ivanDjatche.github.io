<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLavagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lavages', function (Blueprint $table) {
            
                $table->integer('idLavage')->autoIncrement();
                $table->char('DateLavage');
                $table->char('Type');
                $table->char('Montant');
                $table->string('Duree');
                $table->char('NomLaveur');
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
        Schema::dropIfExists('lavages');
    }
}

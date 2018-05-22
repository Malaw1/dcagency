<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marque');
            $table->string('modele');
            $table->string('serie');
            $table->string('anneAcquis');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('societeContacter');
            $table->string('echelle');
            $table->string('precision');
            $table->string('code');
            $table->string('salle');
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
        Schema::dropIfExists('equipements');
    }
}

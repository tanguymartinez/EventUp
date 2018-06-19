<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvenementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evenements', function (Blueprint $table) {
            $table->increments('idEvent');
            $table->string('nomEvenement');
            $table->mediumText('DescriptionEvent');
            $table->string('villeEvent');
            $table->integer('nbMaxInscrits');
            $table->date('dateEvent');
            $abele->boolean('EvenementPayant');
            $table->string('lienSitedePayment');
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
        Schema::dropIfExists('evenements');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('idEvent');
            $table->string('nomEvenement');
            $table->mediumText('DescriptionEvent');
            $table->unsignedInteger('ville_id');
            $table->foreign('ville_id')->references('idVille')->on('villes');
            $table->integer('nbMaxInscrits');
            $table->date('dateDeb');
            $table->date('dateFin');
            $table->boolean('EvenementPayant')->nullable();
            $table->string('lienSitePayment')->nullable()->default(NULL);
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

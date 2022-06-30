<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randonnees', function (Blueprint $table) {
            $table->id();
            $table->string('date_rando');
            $table->string('heure_depart');
            $table->string('depart_rando');
            $table->string('circuit');
            $table->string('kilometres');
            $table->string('animateurs');
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
        Schema::dropIfExists('randonnees');
    }
};

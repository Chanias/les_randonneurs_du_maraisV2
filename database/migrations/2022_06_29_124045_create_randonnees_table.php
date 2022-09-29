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
            $table->date('date');
            $table->char('heure_rdv',5);
            $table->char('heure_depart',5);
            $table->string('point_de_depart',191);
            $table->string('nom',60);
            $table->string('commentaires',255);
            $table->float('kilometres');
            $table->string('lien_photos',255);
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

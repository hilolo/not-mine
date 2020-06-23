<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('moyens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Type')->nullable();
            $table->string('Matricule')->nullable();
            $table->string('Chauffeur')->nullable();
            $table->string('Prestataire')->nullable();
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
        Schema::dropIfExists('moyens');
    }
}

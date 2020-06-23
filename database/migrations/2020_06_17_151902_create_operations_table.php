<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pd')->nullable();
            $table->string('vo')->nullable();
            $table->integer('clent_id')->unsigned();
            $table->foreign('clent_id')->references('id')->on('clients');
            $table->integer('dest1')->unsigned();
            $table->foreign('dest1')->references('id')->on('destinations');
            $table->date('dest1date')->nullable() ;
            $table->integer('dest2')->unsigned();
            $table->foreign('dest2')->references('id')->on('destinations');
            $table->date('dest2date')->nullable() ;
            $table->integer('moyen_id')->unsigned();
            $table->foreign('moyen_id')->references('id')->on('moyens');
            $table->float('tarif')->nullable() ;
            $table->float('amount')->nullable();
            $table->string('etat')->nullable();
            $table->text('commentaire')->nullable();


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
        Schema::dropIfExists('operations');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorosiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porosi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('total');
            $table->string('data');
            $table->unsignedBigInteger('id_perdorues');
            $table->foreign('id_perdorues')->references('id')->on('perdorues');
            $table->unsignedBigInteger('id_produkt');
            $table->foreign('id_produkt')->references('id')->on('produkt');
            $table->string('source');
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
        Schema::dropIfExists('porosi');
    }
}

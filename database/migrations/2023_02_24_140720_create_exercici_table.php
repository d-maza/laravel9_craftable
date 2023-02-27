<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciciTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercici', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable();
            $table->string('tipo', 200);
            $table->text('observacions')->nullable();
            $table->dateTime('fecha');
            
            $table->foreign('full_id', 'FK_EDAE8B669AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercici');
    }
}

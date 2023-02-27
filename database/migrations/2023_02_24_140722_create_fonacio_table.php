<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFonacioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonacio', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_A939B3A9AD7F406');
            $table->tinyInteger('l')->nullable();
            $table->tinyInteger('n')->nullable();
            $table->tinyInteger('d')->nullable();
            $table->tinyInteger('t')->nullable();
            $table->tinyInteger('s')->nullable();
            $table->tinyInteger('x_j')->nullable();
            $table->tinyInteger('f')->nullable();
            $table->tinyInteger('labials')->nullable();
            
            $table->foreign('full_id', 'FK_A939B3A9AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fonacio');
    }
}

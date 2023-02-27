<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolcllavimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solcllaviment', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_405FB0D19AD7F406');
            $table->tinyInteger('normal')->nullable();
            $table->tinyInteger('contracturat')->nullable();
            $table->tinyInteger('fosa_borrada')->nullable();
            
            $table->foreign('full_id', 'FK_405FB0D19AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solcllaviment');
    }
}

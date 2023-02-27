<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespiracioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respiracio', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_C5A51B659AD7F406');
            $table->string('en_repos', 3)->nullable();
            $table->string('dur_exercici', 3)->nullable();
            $table->string('opcion_nocturna', 3)->nullable();
            $table->string('estat_nas', 20)->nullable();
            $table->tinyInteger('ober_aletes_nas')->nullable();
            $table->string('test_rosenthal', 3)->nullable();
            $table->string('test_narinari', 3)->nullable();
            
            $table->foreign('full_id', 'FK_C5A51B659AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respiracio');
    }
}

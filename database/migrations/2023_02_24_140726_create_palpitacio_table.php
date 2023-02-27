<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalpitacioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palpitacio', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('atm_id')->nullable()->unique('UNIQ_B6674C732E7408AF');
            $table->string('field_1', 20)->nullable();
            $table->string('field_2', 20)->nullable();
            $table->string('field_3', 20)->nullable();
            $table->string('field_4', 20)->nullable();
            $table->string('field_5', 20)->nullable();
            $table->string('field_6', 20)->nullable();
            $table->string('field_7', 20)->nullable();
            
            $table->foreign('atm_id', 'FK_B6674C732E7408AF')->references('id')->on('atm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palpitacio');
    }
}

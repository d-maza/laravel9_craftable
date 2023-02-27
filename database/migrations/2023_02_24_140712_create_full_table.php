<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFullTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('full', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('pacient_id')->nullable();
            $table->dateTime('data_examen');
            $table->dateTime('data_examen_mod')->nullable();
            
            $table->foreign('pacient_id', 'FK_E07FD4A01DF7AA4B')->references('id')->on('pacient');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('full');
    }
}

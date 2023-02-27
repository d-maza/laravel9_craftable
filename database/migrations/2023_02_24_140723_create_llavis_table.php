<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlavisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llavis', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_3CE380229AD7F406');
            $table->string('atrofia', 3)->nullable();
            $table->string('to_normal', 3)->nullable();
            $table->tinyInteger('contractura_cingla')->nullable();
            
            $table->foreign('full_id', 'FK_3CE380229AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llavis');
    }
}

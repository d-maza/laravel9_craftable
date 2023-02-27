<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFalsamossegadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('falsamossegada', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('dismorfosi_id')->nullable()->unique('UNIQ_73BFCC762A2B399D');
            $table->tinyInteger('anterior')->nullable();
            $table->tinyInteger('lateral')->nullable();
            
            $table->foreign('dismorfosi_id', 'FK_73BFCC762A2B399D')->references('id')->on('dismorfosi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('falsamossegada');
    }
}

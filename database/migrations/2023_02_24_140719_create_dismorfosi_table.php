<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDismorfosiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dismorfosi', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_14F299FE9AD7F406');
            $table->tinyInteger('tipus_classe_II_1')->nullable();
            $table->tinyInteger('tipus_classe_II_2')->nullable();
            $table->tinyInteger('tipus_classe_III')->nullable();
            $table->text('altres')->nullable();
            $table->text('comentaris')->nullable();
            
            $table->foreign('full_id', 'FK_14F299FE9AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dismorfosi');
    }
}

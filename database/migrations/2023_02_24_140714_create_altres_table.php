<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAltresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('altres', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_4C06D3819AD7F406');
            $table->text('marxa')->nullable();
            $table->string('columna_cervical', 30)->nullable();
            $table->tinyInteger('rot_post_crani')->nullable();
            $table->tinyInteger('rot_ant_crani')->nullable();
            $table->string('movilitat_correcta', 30)->nullable();
            $table->tinyInteger('desviacio_ocular')->nullable();
            $table->tinyInteger('ortodoncia')->nullable();
            $table->tinyInteger('alteracio_son')->nullable();
            $table->tinyInteger('ferula')->nullable();
            $table->tinyInteger('contusio_mandibular')->nullable();
            $table->tinyInteger('fuetada_cervica')->nullable();
            $table->text('altres_observacions')->nullable();
            
            $table->foreign('full_id', 'FK_4C06D3819AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('altres');
    }
}

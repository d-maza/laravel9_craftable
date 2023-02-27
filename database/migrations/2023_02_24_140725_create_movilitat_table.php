<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovilitatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movilitat', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_803776439AD7F406');
            $table->string('obertura', 10)->nullable();
            $table->string('tancament', 10)->nullable();
            $table->string('propulsio', 10)->nullable();
            $table->string('mov_lat_dret', 10)->nullable();
            $table->string('mov_lat_esq', 10)->nullable();
            $table->text('comentaris_obertura')->nullable();
            $table->text('comentaris_tancament')->nullable();
            $table->text('comentaris_propulsio')->nullable();
            $table->text('comentaris_mov_lat_dret')->nullable();
            $table->text('comentaris_mov_lat_esq')->nullable();
            
            $table->foreign('full_id', 'FK_803776439AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movilitat');
    }
}

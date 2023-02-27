<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeglucioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deglucio', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_DE7C3E349AD7F406');
            $table->tinyInteger('normal')->nullable();
            $table->tinyInteger('contraccio_labial')->nullable();
            $table->tinyInteger('llavis_i_galtes')->nullable();
            $table->tinyInteger('atipica')->nullable();
            $table->text('altres_observacions')->nullable();
            
            $table->foreign('full_id', 'FK_DE7C3E349AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deglucio');
    }
}

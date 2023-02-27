<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActitudsnocivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actitudsnocives', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_55BACA469AD7F406');
            $table->tinyInteger('mossegar_llavi_inferior')->nullable();
            $table->tinyInteger('mossegar_galta')->nullable();
            $table->tinyInteger('mastegar_xiclet')->nullable();
            $table->tinyInteger('menjar_pipes')->nullable();
            $table->tinyInteger('onicofagia')->nullable();
            $table->tinyInteger('dormir_decubit_pro')->nullable();
            $table->tinyInteger('masticacio_unilateral_dreta')->nullable();
            $table->tinyInteger('masticacio_unilateral_esquerra')->nullable();
            $table->tinyInteger('altres_actituds')->nullable();
            $table->text('comentaris')->nullable();
            
            $table->foreign('full_id', 'FK_55BACA469AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actitudsnocives');
    }
}

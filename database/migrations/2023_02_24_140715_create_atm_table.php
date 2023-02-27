<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atm', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_CE04D9129AD7F406');
            $table->string('dolor_mecanic', 50)->nullable();
            $table->string('dolor_repos', 50)->nullable();
            $table->string('dolor_matuti', 50)->nullable();
            $table->string('contractures_masseter', 20)->nullable();
            $table->string('contractures_temporal', 20)->nullable();
            $table->string('contractures_digastric', 20)->nullable();
            $table->string('contractures_pterigoideu_medial', 20)->nullable();
            $table->string('contractures_pterigoideu_lateral', 20)->nullable();
            $table->string('contractures_ecm', 20)->nullable();
            $table->string('contractures_triangle_suboccipital', 20)->nullable();
            $table->string('contractures_escale', 20)->nullable();
            $table->string('contractures_trapezi_superior', 20)->nullable();
            $table->string('contractures_diafragma', 20)->nullable();
            $table->string('contractures_piramidal', 20)->nullable();
            $table->text('altres')->nullable();
            $table->text('comentaris')->nullable();
            $table->string('cruiximents', 50)->nullable();
            $table->string('clics', 50)->nullable();
            
            $table->foreign('full_id', 'FK_CE04D9129AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atm');
    }
}

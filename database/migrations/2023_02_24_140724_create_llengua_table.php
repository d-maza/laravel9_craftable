<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlenguaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llengua', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('full_id')->nullable()->unique('UNIQ_1024F1B9AD7F406');
            $table->tinyInteger('pr_normal')->nullable();
            $table->tinyInteger('pr_cd_sup')->nullable();
            $table->tinyInteger('pr_cd_inf')->nullable();
            $table->tinyInteger('pr_interdental')->nullable();
            $table->tinyInteger('pr_entre_llavis')->nullable();
            $table->tinyInteger('pr_invisible')->nullable();
            $table->text('fre_lingual')->nullable();
            $table->text('comentaris')->nullable();
            
            $table->foreign('full_id', 'FK_1024F1B9AD7F406')->references('id')->on('full');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('llengua');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBruxismeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bruxisme', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('atm_id')->nullable()->unique('UNIQ_E344606C2E7408AF');
            $table->tinyInteger('centric')->nullable();
            $table->tinyInteger('excentric')->nullable();
            
            $table->foreign('atm_id', 'FK_E344606C2E7408AF')->references('id')->on('atm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bruxisme');
    }
}

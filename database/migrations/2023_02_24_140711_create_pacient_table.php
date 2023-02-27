<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacient', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('nom', 30);
            $table->string('cognoms');
            $table->string('telefon', 11)->nullable();
            $table->string('curs_escolar', 30)->nullable();
            $table->dateTime('data_naixement')->nullable();
            $table->string('sex', 1);
            $table->string('esports')->nullable();
            $table->dateTime('fecha');
            $table->string('referidor')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacient');
    }
}

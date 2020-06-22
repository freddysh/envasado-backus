<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnvasadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('envasados', function (Blueprint $table) {
            $table->id();
            $table->string('marca_bebida');
            $table->integer('contador');
            $table->dateTime('fecha');
            $table->bigInteger('planta_id')->unsigned()->index();
            $table->foreign('planta_id')->references('id')->on('plantas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('envasados');
    }
}

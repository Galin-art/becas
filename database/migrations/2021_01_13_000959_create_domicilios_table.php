<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
//            $table->string('int')->nullable();
            $table->string('inegi')->nullable();
            $table->string('tipovt')->nullable();
            $table->string('vialidad')->nullable();
            $table->string('vialidad2')->nullable();
            $table->string('vialidad3')->nullable();
            $table->string('num_ext')->nullable();
            $table->string('tipoat')->nullable();
            $table->string('colonia')->nullable();
            $table->string('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->string('referencia')->nullable();
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
        Schema::dropIfExists('domicilios');
    }
}

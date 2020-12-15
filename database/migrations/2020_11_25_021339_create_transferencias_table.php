<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferencias', function (Blueprint $table) {
            $table->id();
            $table->string('año');
            $table->integer('monto')->nullable();
            $table->integer('canal')->nullable();
            $table->string('tipoCanal')->nullable();
            $table->string('modalidad')->nullable();
            $table->string('tipoDocumento')->nullable();
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('beneficiario_id');
            $table->unsignedBigInteger('bimestre_id')->nullable();
            $table->unsignedBigInteger('tarjeta_id')->nullable();
            $table->timestamps();



            $table->foreign('beneficiario_id')->references('id')->on('beneficiarios');

            $table->foreign('bimestre_id')->references('id')->on('bimestres');
            $table->foreign('tarjeta_id')->references('id')->on('tarjetas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transferencias');
    }
}

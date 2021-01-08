<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeneficiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beneficiarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('paterno');
            $table->string('materno');
            $table->integer('telefono')->nullable();
            $table->string('folio');
            $table->string('curp')->nullable();
            $table->string('entidad')->nullable();
//            $table->string('famid')->nullable();
//            $table->string('no_ext')->nullable();
//            $table->string('referencias')->nullable();
            $table->unsignedBigInteger('localidad_id');
            $table->timestamps();


            $table->foreign('localidad_id')->references('id')->on('localidades');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beneficiarios');
    }
}

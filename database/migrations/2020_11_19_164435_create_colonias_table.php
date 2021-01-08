<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColoniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonias', function (Blueprint $table) {
            $table->id();
            $table->string('nom_col');
            $table->string('colonia');
            $table->string('col_text')->nullable();
            $table->string('calle')->nullable();
            $table->string('vialidad1')->nullable();
            $table->string('vialidad2')->nullable();
            $table->string('vialidad3')->nullable();
            $table->string('no_ext')->nullable();
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
        Schema::dropIfExists('colonias');
    }
}

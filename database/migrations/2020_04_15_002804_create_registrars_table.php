<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('entradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->integer('precio_compra');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('registrars', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('inventario_id'); // Relación con categorias
            $table->foreign('inventario_id')->references('id')->on('inventarios'); // clave foranea

            $table->unsignedBigInteger('entrada_id'); // Relación con categorias
            $table->foreign('entrada_id')->references('id')->on('entradas'); // clave foranea

            $table->integer('precio_compra');
            $table->integer('cantidad');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrars');
        Schema::dropIfExists('entradas');
    }
}

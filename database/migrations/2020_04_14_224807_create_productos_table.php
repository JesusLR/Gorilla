<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categorias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('categoria');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('medidas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('medida');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('producto');

            $table->unsignedBigInteger('categoria_id'); // Relación con categorias
            $table->foreign('categoria_id')->references('id')->on('categorias'); // clave foranea

            $table->unsignedBigInteger('medida_id'); // Relación con categorias
            $table->foreign('medida_id')->references('id')->on('medidas'); // clave foranea

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
        Schema::dropIfExists('productos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('medidas');
    }
}

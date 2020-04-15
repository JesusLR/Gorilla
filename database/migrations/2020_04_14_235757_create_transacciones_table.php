<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('corte_cajas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha_inicio');
            $table->string('fecha_fin');
            $table->string('cantidad_inicio');
            $table->string('cantidad_fin');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('corte_id'); // Relación con categorias
            $table->foreign('corte_id')->references('id')->on('corte_cajas'); // clave foranea

            $table->string('total_venta');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('transacciones', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('venta_id'); // Relación con categorias
            $table->foreign('venta_id')->references('id')->on('ventas'); // clave foranea

            $table->unsignedBigInteger('inventario_id'); // Relación con categorias
            $table->foreign('inventario_id')->references('id')->on('inventarios'); // clave foranea

            $table->string('precio_venta');
            $table->string('cantidad');
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
        Schema::dropIfExists('transacciones');
        Schema::dropIfExists('ventas');
        Schema::dropIfExists('corte_cajas');
    }
}

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
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('producto_id');
            $table->string('nombre');
            $table->longText('descripcion');
            $table->float('precioUnitario');
            $table->boolean('disponible');
            $table->integer('cantidad');
            $table->string('image', 300)->nulleabe();
            $table->timestamps();
            $table->unsignedBigInteger('subdepartamento_id');
            
        
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
    }
}

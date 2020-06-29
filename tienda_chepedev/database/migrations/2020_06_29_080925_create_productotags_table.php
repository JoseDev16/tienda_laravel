<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductotagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_tags', function (Blueprint $table) {
            $table->bigIncrements('productoTag_id');
            $table->string('nombreTag');
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

           #foranea de tag



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productotags');
    }
}

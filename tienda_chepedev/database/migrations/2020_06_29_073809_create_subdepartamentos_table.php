<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subdepartamentos', function (Blueprint $table) {
            $table->bigIncrements('subDepartamento_id');
            $table->timestamps();
            $table->string('nombreSubDepartamentos');
            $table->unsignedBigInteger('departamento_id');

            #foranea de departamento



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subdepartamentos');
    }
}

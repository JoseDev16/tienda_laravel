<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        #Relacion: Productos -> SubDepartamentos
        Schema::table('productos', function (Blueprint $table) {
            
        
            $table->foreign('subdepartamento_id')
                  ->references('subDepartamento_id')->on('subdepartamentos')
                  ->onDelete('cascade');
        });

        #Relacion: Ordenes -> usuario
        Schema::table('ordenes', function (Blueprint $table) {
            $table->foreign('user_id')
                  ->references('id')->on('users')
                  ->onDelete('cascade');
        
            
        });
        #Relacion M->M: Producto->Orden: detalle_Orden
        Schema::table('detalle_ordenes', function (Blueprint $table) {
            
            
            $table->foreign('producto_id')
                        ->references('producto_id')->on('productos')
                        ->onDelete('cascade');
                  
            
            $table->foreign('orden_id')
                        ->references('orden_id')->on('ordenes')
                        ->onDelete('cascade');
        });

        #Relacion: Subdepartamentos -> departamento
        Schema::table('subdepartamentos', function (Blueprint $table) {
            $table->foreign('departamento_id')
            ->references('departamento_id')->on('departamentos')
            ->onDelete('cascade');
            
        });

        #Relacion M -> M: Producto-> tags: producto_tags
        Schema::table('producto_tags', function (Blueprint $table) {
            $table->foreign('tag_id')
            ->references('tag_id')->on('tags')
            ->onDelete('cascade');

      
            $table->foreign('producto_id')
            ->references('producto_id')->on('productos')
            ->onDelete('cascade');
            
        });



        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
        #$table->dropColumn("subdepartamento_id");
       /* Schema::table('productos', function (Blueprint $table) {
            $table->dropForeign('subdepartamentos_departamento_id_foreign');
        });*/

        

    }

}

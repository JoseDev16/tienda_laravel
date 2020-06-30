<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $primaryKey = 'producto_id';
    #protected $table= 'productos';
    
    public function subdepartamento()
    {
        return $this->belongsTo('App\SubDepartamento', 'subdepartamento_id');
    }
    #convencion eloquent: tabla=producto_orden (alfabetico, minuscula y plural)
    # nombre_tabla+Foranea del modelo con que se realizara la relacion+ llave del modelo actual de la funcion
    public function ordenes()
    {
        return $this->belongsToMany('App\Orden', 'detalle_ordenes', 'producto_id', 'orden_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'producto_tags', 'producto_id', 'tag_id');
    }
    
}

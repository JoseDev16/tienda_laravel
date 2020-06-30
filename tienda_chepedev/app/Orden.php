<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $primaryKey = 'orden_id';
    protected $table= 'ordenes';

    public function user()
    {
        return $this->belongsTo('App\User', 'orden_id', 'id');
    }
    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'detalle_ordenes', 'orden_id', 'producto_id');
    }

    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $primaryKey = 'tag_id';

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'producto_tags', 'tag_id', 'producto_id');
    }
    
}

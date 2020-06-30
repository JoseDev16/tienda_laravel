<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDepartamento extends Model
{
    //
    protected $primaryKey = 'subDepartamento_id';
    protected $table= 'subdepartamentos';

    public function productos()
    {
        return $this->hasMany('App\Producto', 'subdepartamento_id');
    }

    public function departamento()
    {
        return $this->belongsTo('App\Departamento', 'departamento_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $primaryKey = 'departamento_id';

    public function subdepartamentos()
    {
        return $this->hasMany('App\SubDepartamento', 'subdepartamento_id');
    }
}

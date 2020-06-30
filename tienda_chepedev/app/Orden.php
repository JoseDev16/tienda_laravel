<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    //
    protected $primaryKey = 'orden_id';
    protected $table= 'ordenes';

    public function users()
    {
        return $this->hasMany('App\User');
    }

    
}

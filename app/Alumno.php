<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alumno extends Model
{
    use SoftDeletes; 
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['nombres', 'apellidos', 'edad'];

    public function registros()
    {
        return $this->hasMany('App\Registro');
    }
}

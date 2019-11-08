<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maestro extends Model
{
    use SoftDeletes; 
    
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombres', 'apellidos', 'edad'];

    
    public function materia()
    {
        return $this->hasMany('App\Materias');
    }
}

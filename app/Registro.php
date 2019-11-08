<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registro extends Model
{
    use SoftDeletes; 
    protected $dates = ['deleted_at'];
    protected $fillable = ['nota', 'fecha'];
    
    public function alumnos()
    {
        return $this->belongsTo('App\Alumno');
    }
    public function materia()
    {
        return $this->belongsTo('App\Materias');
    }
    
}
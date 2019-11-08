<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Materias extends Model
{
    use SoftDeletes; 
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre_materia', 'semestre', 'aula', 'horario'];

    public function registros()
    {
        return $this->hasMany('App\Registro');
    }
    public function docente()
    {
        return $this->belongsTo('App\Maestro');
    }
}
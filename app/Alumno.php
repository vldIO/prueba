<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Alumno extends Model
{
    use SoftDeletes; 
    
    protected $dates = ['deleted_at'];
    
    protected $fillable = ['nombre', 'curso', 'edad'];
}

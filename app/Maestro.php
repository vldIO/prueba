<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    protected $fillable = ['nombre', 'materia', 'edad'];
}

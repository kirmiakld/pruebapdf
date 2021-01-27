<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
   protected $fillable = [
        'fecha1', 'fecha2', 'dias',
    ];
}
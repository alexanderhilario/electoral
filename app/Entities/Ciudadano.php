<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Ciudadano extends Model
{
    //

    protected $fillable = ['cedula','nombre','apellido','email','estado'];
}

<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    //

    protected $fillable = ['nombre', 'descripcion','estado'];
}

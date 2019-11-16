<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Elecciones extends Model
{
    //
    protected $fillable = ['nombre','estado'];

    public function candidato()
    {
    	return $this->hasMany(Candidato::class,'eleccione_id');
    }
}

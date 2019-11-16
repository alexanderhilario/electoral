<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    //
     protected $fillable = ['nombre','apellido','foto','estado', 'partido_id', 'puesto_id', 'eleccione_id','votos'];


     public function puesto()
     {
     	return $this->belongsTo(Puesto::class);
     }

     public function partido()
     {
     	return $this->belongsTo(Partido::class);
     }


     public function eleccione()
     {
     	return $this->belongsTo(Elecciones::class);
     }


}

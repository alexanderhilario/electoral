<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entities\Ciudadano;

use App\Entities\Candidato;

use App\Entities\Elecciones;

class ElectorController extends Controller
{
    //

    public function index(Request $request)
    {

    	$comprobacion = Ciudadano::where('cedula', $request->get('cedula'))->first();

    	if (! empty($comprobacion)) {

    		if ($comprobacion->estado == 1) {
    			return redirect()->route('nivel', $comprobacion->id);
    		}
    		
    	}

    	return view('app/comprobacion', compact('comprobacion'));
    }

    public function nivel($id)
    {
    	$ciudadano = Ciudadano::findOrFail($id);

    	if ($ciudadano->estado == 2) {
    		
    		return redirect()->route('h');
    	}

    	$elecciones = Elecciones::where('estado', 1)->first();

        if ( empty($elecciones)) {
            return redirect()->route('h');
        }
        
    	$ciudadano->estado = 2;

		$ciudadano->save();

    	return view('app.vota', compact('elecciones'));

    }

    public function voto($id)
    {
    	$candidato = Candidato::findOrFail($id);

    	$candidato->votos = $candidato->votos + 1;

    	$candidato->save();

    	return redirect()->route('h')->with('success', 'Gracias por votar!');
    }

}

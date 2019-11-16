<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entities\Puesto;

use App\Entities\Partido;

use App\Entities\Candidato;

use App\Entities\Ciudadano;

use App\Entities\Elecciones;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puesto = Puesto::all();
        return view('home', compact('puesto'));
    }

    public function storelectivop(Request $request)
    {
        $this->validate($request, [
            'puesto'        =>  'required',
            'descripcion'   =>  'required'
        ]);

        $puesto = Puesto::create([
            'nombre'    =>  $request->get('puesto'),
            'descripcion'   =>  $request->get('descripcion'),
            'estado'    =>  1
        ]);

        return redirect()->back()->with('success','Puesto guardado con exitos!');

    }

    public function editpuesto(Request $request, $id)
    {
        $this->validate($request, [
            'puesto'        =>  'required',
            'descripcion'   =>  'required',
        ]);

        $puesto = Puesto::findOrFail($id);

        $puesto->fill($request->all());

        $puesto->save();

         return redirect()->back()->with('success','Puesto actulizado con exitos!');
    }

    public function deletep($id)
    {
        $puesto = Puesto::findOrFail($id);

        $puesto->delete();

        return redirect()->back()->with('success','Puesto eliminado con exitos!');
    }


    public function ciudadano()
    {
        $ciudadano = Ciudadano::all();

        return view('app.ciudadano',compact('ciudadano'));
    }

    public function ciudadanostore(Request $request)
    {  
        $this->validate($request, [
            'cedula'    =>  ['required','unique:ciudadanos'],
            'nombre'    =>  'required',
            'apellido'  =>  'required',
            'email'     =>  ['required','email','unique:ciudadanos'],
        ]); 

        $ciudadano = Ciudadano::create([
            'cedula'    =>  $request->get('cedula'),
            'nombre'    =>  $request->get('nombre'),
            'apellido'  =>  $request->get('apellido'),
            'email'     =>  $request->get('email'),
            'estado'    =>  1

        ]);

        return redirect()->back()->with('success','Creado con exitos!');

    }

    public function ciudadanoedit(Request $request,$id)
    { 
        $ciudadano = Ciudadano::findOrFail($id);

        $this->validate($request, [
            'nombre'    =>  'required',
            'apellido'  =>  'required',
        ]); 

        $ciudadano->fill($request->all());

        $ciudadano->save();

        return redirect()->back()->with('success','Actulizado con exitos!');
    }

    public function ciudadanodelete($id)
    {
        $ciudadano = Ciudadano::findOrFail($id);

        $ciudadano->delete();

        return redirect()->back()->with('success','Eliminado con exitos!');
    }


    public function partido()
    {
        $partido = Partido::all();

        return view('app.partido',compact('partido'));
    }

    public function partidostore(Request $request)
    {
        $this->validate($request, [
            'nombre'    =>  'required',
            'descripcion'   =>  'required'
        ]);

         $ciudadano = Partido::create([
            'nombre'    =>  $request->get('nombre'),
            'descripcion'  =>  $request->get('descripcion'),
            'estado'    =>  1

        ]);

        return redirect()->back()->with('success','Creado con exitos!');

    }

    public function partidoedit(Request $request, $id)
    {
        $partido = Partido::findOrFail($id);

        $this->validate($request, [
            'nombre'    =>  'required',
            'descripcion'   =>  'required',
            'estado'    =>  'required'
        ]);


        $partido->fill($request->all());

        $partido->save();

        return redirect()->back()->with('success','Actulizado con exitos!');

    }

    public function candidato()
    {
        $candidato = Candidato::all();

        $partido = Partido::all();

        $puesto = Puesto::all();

        $eleccion = Elecciones::all();

        return view('app.candidato', compact('candidato','partido','puesto','eleccion'));
    }

    public function candidatoadd(Request $request)
    {
        $this->validate($request, [
            'nombre'    =>  'required',
            'apellido'  =>  'required',
            'partido'   =>  'required',
            'puesto'    =>  'required',
            'eleccion'  =>  'required'
        ]);

        $candidato = Candidato::create([
            'nombre'    =>  $request->get('nombre'),
            'apellido'    =>  $request->get('apellido'),
            'partido_id'    =>  $request->get('partido'),
            'puesto_id'    =>   $request->get('puesto'),
            'eleccione_id'   =>  $request->get('eleccion'),
            'estado'    =>  1,
            'voto'  =>  '0'
        ]);

        return redirect()->back()->with('success','Creado con exitos!');

    }

    public function candidatoedit(Request $request, $id)
    {

        $candidato = Candidato::findOrFail($id);

         $this->validate($request, [
            'nombre'    =>  'required',
            'apellido'  =>  'required',
            'partido_id'   =>  'required',
            'puesto_id'    =>  'required',
            'eleccione_id'  =>  'required'
        ]);

        $candidato->fill($request->all());

        $candidato->save();

        return redirect()->back()->with('success','Actulizado con exitos!');

    }

    public function candidatosdelete($id)
    {

        $candidato = Candidato::findOrFail($id);

        $candidato->delete();

        return redirect()->back()->with('success','Eliminado con exitos!');
    }






    public function elecciones()
    {
        $elecciones = Elecciones::all();

        return view('app.elecciones', compact('elecciones'));
    }

    public function eleccionestore(Request $request)
    {
        $this->validate($request, ['nombre' => 'required']);

        $elecciones = Elecciones::create([
            'nombre'    =>  $request->get('nombre'),
            'estado'    =>  1
        ]);

        return redirect()->back()->with('success','Agregar con exitos!');
    }

    public function eleccionedit(Request $request, $id)
    {
        $elecciones = Elecciones::findOrFail($id);

        $elecciones->fill($request->all());

        $elecciones->save();

       return redirect()->back()->with('success','Actulizado con exitos!');
    }

    public function elecciondelete($id)
    {
        $elecciones = Elecciones::findOrFail($id);

        $elecciones->delete();

       return redirect()->back()->with('success','Eliminado con exitos!');

    }




}

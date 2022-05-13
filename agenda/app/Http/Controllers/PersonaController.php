<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas=Persona::all();
        return view('personas_index', compact('personas'));
    }

    public function create(){

        return view('personas_create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'apellidos' => 'required',
            'telefono' => 'required',
            'estrella' => 'required',
            'categoria_id' => 'required'
        ]);
        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->telefono = $request->telefono;
        $persona->estrella = $request->estrella;
        $persona->categoria_id = $request->categoria_id;
        $persona->save();
        return redirect()->route('personas.index');
    }

    public function show(Persona $persona){
        return view('personas_show', compact('persona'));
    }
    public function edit(Persona $persona)
    {

        return view('personas_edit', compact('persona'));

    }

    function update(Request $request,Persona $persona)
    {
        if (isset($_POST['estrellaNo'])) {
            $persona->estrella = true;
            $persona->save();
            return $this->index();
        } else if (isset($_POST['estrellaSi'])) {
            $persona->estrella = false;
            $persona->save();
            return $this->index();
        } else {

            $this->validate($request, [
                'nombre' => 'required',
                'apellidos' => 'required',
                'telefono' => 'required',
                'estrella' => 'required',
                'categoria_id' => 'required'
            ]);
            $persona = new Persona();
            $persona->nombre = $request->nombre;
            $persona->apellidos = $request->apellidos;
            $persona->telefono = $request->telefono;
            $persona->estrella = $request->estrella;
            $persona->categoria_id = $request->categoria_id;
            $persona->save();
            return redirect()->route('personas.index');
        }
    }

    public function destroy(Persona $persona){
        $persona->delete();
        return redirect()->route('personas.index');
    }
}

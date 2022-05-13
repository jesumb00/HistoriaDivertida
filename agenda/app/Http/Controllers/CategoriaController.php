<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias=Categoria::all();
        return view('categorias_index', compact('categorias'));
    }

    public function create(){
        return view('categorias_create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'nombre' => 'required'
        ]);
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    public function show(Categoria $categoria){
        return view('categorias_show',compact('categoria'));
    }
    public function edit(Categoria $categoria)
    {
            return view('categorias_edit', compact('categoria'));

    }

    function update(Request $request,Categoria $categoria){
            $this->validate($request, [
                'nombre' => 'required'
            ]);
            $categoria->nombre = $request->nombre;
            $categoria->save();
            return $this->index();

    }

    public function destroy(Categoria $categoria){
        $categoria->delete();
        return redirect()->route('personas.index');
    }
}

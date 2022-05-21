<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;


class UsuarioController extends Controller
{
    public function index() // Display a listing of the resource.
    {
        $usuarios = Usuario::orderBy('name')->get();
        return view('usuarios_index', compact('usuarios'));
    }

    public function exist(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
         $user=User::where('email',$request->email)->first();

         if($user!="" && $user->password===md5($request->password)){
             Auth::login($user);
             request()->session()->regenerate();
             return redirect()->intended('shop');
         }
        throw ValidationException::withMessages([
           'email' => 'Este email no es correcto',
            'password' =>'Contraseña incorrecta'
        ]);



    }



    public function closed(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
    }
    public function create() // Show the form for creating a new resource.
    {
        return view('usuarios_create');
    }

    public function store(Request $request) // Store a newly created resource in storage.
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->email = $request->email;
        $usuario->password = md5($request->password);
        $usuario->save();

        return redirect()->route('/login');
    }

    public function show(Usuario $usuario) // Display the specified resource.
    {
        return view('usuarios_show', compact('usuario'));
    }

    public function edit(Usuario $usuario) // Show the form for editing the specified resource.
    {
        return view('usuarios_edit', compact('usuario'));
    }

    public function update(Request $request, Usuario $usuario) // Update the specified resource in storage.
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->email = $request->email;
        $usuario->password = md5($request->password);
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function destroy(Usuario $usuario) // Remove the specified resource from storage.
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}

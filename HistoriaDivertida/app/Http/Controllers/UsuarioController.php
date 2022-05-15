<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Schema\ValidationException;

class UsuarioController extends Controller
{
    public function index() // Display a listing of the resource.
    {
        $usuarios = Usuario::orderBy('name')->get();
        return view('usuarios_index', compact('usuarios'));
    }

    public function exist(Request $request){
        /*$array=request()->validate([
            'email'=>['required','email','string'],
            'password'=>['required','string']
        ]);

        $remember=(request()->filled('input-remember'));

        if(Auth::attempt($array,$remember)){
            request()->session()->regenerate();//regeneramos la sesion por el session fixation
            return redirect()->intended('shop');//->with('status','Todo correcto');
        }else{
            return redirect('login');
        }
        throw ValidationException::withMessages([
            'email'=>'El email no es correcto'

        ]);*/
        $remember=(request()->filled('input-remember'));
         $user=User::where('email',$request->email)->first();
         //return $user;
         if($user->password===$request->password){
             Auth::login($user);
             request()->session()->regenerate();
             return redirect()->intended('shop');
         }
         else{
             print $user->password;
             print "<br>";
             print md5($request->password);
         }


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
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('/login/login');
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
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    public function destroy(Usuario $usuario) // Remove the specified resource from storage.
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}

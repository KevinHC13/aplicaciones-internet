<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Este metodo muestra la vista para crear un nuevo usuario
    public function index()
    {
        return view('auth.register');
    }

    // Este metodo valida el formulario, e incerta en la tabla el nuevo usuario
    public function store(Request $request)
    {
        // Validacion del formulario
        $request->request->add(['username' => Str::slug($request->username)]);

        $this->validate($request,[
            'name' => 'required|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);
        
        // Creando e insertando nuevo usuario
        User::create([
            'name' =>$request->name,
            'username' => $request->username,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
        ]);

        // Autenticando al usuario
        auth()->attempt($request->only('email','password'));

        // Redireccionar al muro
        return redirect()->route('product');
    }
}

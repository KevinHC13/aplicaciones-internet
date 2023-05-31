<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Este metodo muestra la vista la login
    public function index()
    {
        return view('auth.login');
    }

    // Este metodo valida los datos del formulario de login y redirecciona a la vista de productos
    public function store(Request $request)
    {
        // Obtiene las variables de formulario
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Autentica al usuario
        if(!auth()->attempt($request->only('email','password'),$request->rememver)){
            return back()->with('mensaje','Credenciales incorrectas');
        }

        return redirect()->route('product');
    }
}
 
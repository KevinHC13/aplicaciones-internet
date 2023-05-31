<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // Este metodo es usado para terminar la sesion actual
    public function store()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}

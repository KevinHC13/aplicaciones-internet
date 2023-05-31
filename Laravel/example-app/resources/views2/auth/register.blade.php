@extends('layouts.app')

@section('titulo')
    Registrate a Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <!-- asset accede a la carpeta publica -->
            <img src="{{asset('img/registrar.jpg')}}" alt="Imagen registro de usuarios"/>
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST">
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold" >Nombre</label>
                    <input id="name" name="name" value="{{old('name')}}" type="text" placeholder="Tu nombre" class="border p-3 w-full rounded-lg"/>
                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" >Nombre de usuario</label>
                    <input id="username" name="username" value="{{old('username')}}" type="text" placeholder="Tu username" class="border p-3 w-full rounded-lg"/>
                </div>
                
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" >Contraseña</label>
                    <input id="password" name="password" type="text" placeholder="Tu password" class="border p-3 w-full rounded-lg"/>
                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" >Confirma contraseña</label>
                    <input id="password_confirmation" name="password_confirmation" type="text" placeholder="Confirma tu password" class="border p-3 w-full rounded-lg"/>
                </div>

                <input 
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-700 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 rounded-lg" />

    
            </form>
        </div>
    </div>
    
@endsection
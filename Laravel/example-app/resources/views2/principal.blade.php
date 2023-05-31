@extends('layouts.app')

<style>
    .bg-custom-background {
      background-image: url('img/login.jpg');
      background-size: 100% auto;
      height: 250px;
      
    }
  </style>

@section('titulo')
  Inicio
    
@endsection

@section('contenido')

<div class="bg-custom-background bg-no-repeat bg-center bg-size ">
    
</div>
<div class="container mx-auto m-6">
    <h2 class="text-2xl font-bold mb-4 text-center">¡Bienvenido a Devstagram!</h2>
    <p class="text-lg mb-4 text-gray-900">La red social diseñada especialmente para desarrolladores.</p>
    <p class="text-lg mb-4 text-gray-900">Comparte tus proyectos, conéctate con otros desarrolladores, y descubre inspiración en el mundo del desarrollo de software.</p>
    <div class="flex justify-center" >
        <a href="/crear-cuenta" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Regístrate ahora</a>
    </div>
</div>

@endsection
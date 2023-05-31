@extends('layouts.app')

@section('titulo')
    Crea una nueva Publicacion
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10" >
            Imagen
        </div>
        <div class="md:w-1/2 px-10  bg-white rounded-lg shadow-xl mt-10 md:mt-0" >
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <lable for="titulo" class="mb-2 block uppercase text-gray-500 font-bold">Titulo</lable>
                    <input
                        id="titulo"
                        name="titulo"
                        type="text"
                        placeholder="Titulo de la publicacion"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror "
                        value="{{ old('name') }}"
                    />
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <lable for="descripcion" class="mb-2 block uppercase text-gray-500 font-bold">Descripcion</lable>
                    <textarea
                        id="descripcion"
                        name="descripcion"
                        placeholder="Descripcion de la publicacion"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror "
                    >{{ old('name') }}</textarea>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>
                <input
                    type="submit"
                    value="Publicar"
                    class="bg-sky-600 hover:bg-sky700 transition-colors cursor-pointer upper
                     font-bold w-full p-3 text-white rounded-lg"
                />
            </form>
        </div>

    </div>
@endsection
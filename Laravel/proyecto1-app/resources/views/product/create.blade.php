@extends('layouts.app')

@section('titulo')
    Agregar nuevo Producto
@endsection

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10" > 
            <img src="{{ asset('images/add_product.jpg') }}" alt="">
        </div>
        <div class="md:w-1/2 px-10  bg-white rounded-lg shadow-xl mt-10 md:mt-0" >
            <form action="{{ route('product.store') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <lable for="shortDescription" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripción corta
                    </lable>
                    <input
                        id="shortDescription"
                        name="shortDescription"
                        type="text"
                        placeholder="Descripción corta del producto"
                        class="border p-3 w-full rounded-lg @error('shortDescription') border-red-500 @enderror "
                        value="{{ old('name') }}"
                    />
                    @error('shortDescription')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <lable for="Description" class="mb-2 block uppercase text-gray-500 font-bold">
                        Descripcion
                    </lable>
                    <textarea
                        id="Description"
                        name="Description"
                        placeholder="Descripcion de la publicacion"
                        class="border p-3 w-full rounded-lg @error('Description') border-red-500 @enderror "
                    >{{ old('Description') }}</textarea>
                    @error('Description')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <lable for="salePrice" class="mb-2 block uppercase text-gray-500 font-bold">
                        Precio de venta
                    </lable>
                    <input
                        id="salePrice"
                        name="salePrice"
                        type="number"
                        placeholder="Precio de venta del producto"
                        class="border p-3 w-full rounded-lg @error('shortDescription') border-red-500 @enderror "
                        value="{{ old('salePrice') }}"
                    />
                    @error('salePrice')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <lable for="purchasePrice" class="mb-2 block uppercase text-gray-500 font-bold">
                        Precio de compra
                    </lable>
                    <input
                        id="purchasePrice"
                        name="purchasePrice"
                        type="number"
                        placeholder="Precio de compra del producto"
                        class="border p-3 w-full rounded-lg @error('shortDescription') border-red-500 @enderror "
                        value="{{ old('purchasePrice') }}"
                    />
                    @error('purchasePrice')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <lable for="stock" class="mb-2 block uppercase text-gray-500 font-bold">
                        Stock
                    </lable>
                    <input
                        id="stock"
                        name="stock"
                        type="number"
                        placeholder="Cantidad en stock"
                        class="border p-3 w-full rounded-lg @error('shortDescription') border-red-500 @enderror "
                        value="{{ old('stock') }}"
                    />
                    @error('stock')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center" >{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <lable for="productWeight" class="mb-2 block uppercase text-gray-500 font-bold">
                        Peso del producto
                    </lable>
                    <input
                        id="productWeight"
                        name="productWeight"
                        type="number"
                        placeholder="Peso del producto en Kg"
                        class="border p-3 w-full rounded-lg @error('shortDescription') border-red-500 @enderror "
                        value="{{ old('productWeight') }}"
                    />
                    @error('productWeight')
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
@extends('layouts.app')

@section('titulo')
    Productos
@endsection

@section('contenido')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre de Producto
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio de venta
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio de compra
                </th>
                <th scope="col" class="px-6 py-3">
                    Stock
                </th>
                <th scope="col" class="px-6 py-3">
                    Peso del Producto
                </th>
                <th scope="col" class="px-6 py-3">
                    Accion
                </th>
            </tr>
        </thead>
        <tbody>
            @if (count($productos) > 0)
            @foreach ($productos as $producto)
                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $producto->shortDescription }}
                    </th>
                    
                    <td class="px-6 py-4">
                        {{ $producto->Description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->salePrice }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->purchasePrice }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->stock }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->productWeight }}
                    </td>
                    <td class="px-6 py-4">
                        <form action="{{ route( 'product.destroy', $producto) }}" method="POST" >
                        @csrf
                        @method('delete')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar</button>
                        </form>
                        <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar</a> -->
                    </td>
                </tr>    
            @endforeach
            @else
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-6 py-4" colspan="7">
                    No hay productos registrados
                </td>
            </tr> 

            @endif
           
            
            
        </tbody>
    </table>
    
</div>
@endsection
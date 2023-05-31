<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Este metodo evita que un usuario pueda acceder si no ha iniciado sesion
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Este metodo consulta la DB y muestra la tabla con los productos en la vista principal
    public function index()
    {
        // Consulta a la DB
        $productos = Product::all();

        return view('product.index',[
            'productos' => $productos
        ]);
    }

    // Este metodo muestra la vista para crear un nuevo producto
    public function create()
    {
        return view('product.create');
    }

    // Este metodo valida el formulario, inserta en la DB y redirecciona a la vista principal
    public function store(Request $request)
    {
        // Validacion del formulario
        $this->validate($request,[
            'shortDescription' => 'required|max:60',
            'Description' => 'required',
            'salePrice' => 'required',
            'purchasePrice' => 'required',
            'stock' => 'required',
            'productWeight' => 'required',
        ]);

        // Cran un objeto Producto para insertarlo en la DB
        Product::create([
            'shortDescription' => $request->shortDescription,
            'Description' => $request->Description,
            'salePrice' => $request->salePrice,
            'purchasePrice' => $request->purchasePrice,
            'stock' => $request->stock,
            'productWeight' => $request->productWeight,
        ]);
        
        return redirect()->route('product');
    }

    // Este metodo elimina un producto de la DB
    public function destroy(Product $producto)
    {
        $producto->delete();
        return redirect()->route('product');

    }
}

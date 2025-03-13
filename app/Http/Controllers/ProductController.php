<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('productos.index'); // Retornar una lista de productos
    }

    public function create()
    {
        return view('productos.create'); // Retornar un formulario para crear un producto
    }

    public function show($name)
    {
        return view('productos.show'); // Retornar un producto específico
    }
}

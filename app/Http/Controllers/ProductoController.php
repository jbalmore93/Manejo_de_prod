<?php

namespace App\Http\Controllers;

use App\Models\Producto;


class ProductoController extends Controller
{
    public function index(){
        return view('producto.index');
    }
    public function create($id = null){
        $producto = $id ? Producto::findOrFail($id) : new Producto();
        return view('producto.create',['id'=>$id]);
    }
}

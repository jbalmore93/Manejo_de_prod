<?php

namespace App\Http\Controllers;


use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('proveedor.index');
      }
      public function createoredit($id = null){
        $proveedor = $id ? Proveedor::findOrFail($id) : new Proveedor();
        return view('proveedor.createoredit',['id'=>$id]);
    }

}

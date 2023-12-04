<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll(){
        $data = Proveedor::get();
        return response()->json($data, 200);
      }

      public function create(Request $request){
        $data['nombre_proveedor'] = $request['nombre_proveedor'];
        Proveedor::create($data);
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
      }

      public function delete($id){
        $res = Proveedor::find($id)->delete();
        return response()->json([
            'message' => "Successfully deleted",
            'success' => true
        ], 200);
      }

      public function get($id){
        $data = Proveedor::find($id);
        return response()->json($data, 200);
      }

      public function update(Request $request,$id){
        $data['nombre_proveedor'] = $request['nombre_proveedor'];
        Proveedor::find($id)->update($data);
        return response()->json([
            'message' => "Successfully updated",
            'success' => true
        ], 200);
      }
}

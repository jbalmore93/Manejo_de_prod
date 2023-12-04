<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Proveedor;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
     'marca_producto',
     'modelo_producto',
     'tipo_producto',
     'precio_costo',
     'precio_unitario',
     'precio_mayore',
     'id_proveedor'

    ];
    public function Proveedor(){

        return $this->hasMany(Proveedor::class,'id','id_proveedor');
    }
}

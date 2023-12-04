<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable=[
      'nombre_proveedor'

    ];
    public function Producto(){

        return $this->belongsTo(Producto::class,'id','id_proveedor');
    }
}

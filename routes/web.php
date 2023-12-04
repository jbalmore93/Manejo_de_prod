<?php

use App\Http\Controllers\ProveedorController;
use App\Livewire\Producto\Producto;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/proveedor',[ProveedorController::class,'index'])->name('proveedor');
Route::get('/proveedor/create',[ProveedorController::class,'createoredit'])->name('proveedor.create');
Route::get('/proveedor/editar/{id}',[ProveedorController::class,'createoredit'])->name('proveedor.edit');
Route::get('/producto',[ProductoController::class,'index'])->name('producto');
Route::get('/producto/create',[ProductoController::class,'create'])->name('create');
Route::get('/producto/editar/{id}',[ProductoController::class,'create'])->name('producto.edit');

//Route::get('/producto',[Producto::class,'render'])->name('producto');

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ProveedorController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('proveedor')->group(function () {
    Route::get('/', [ProveedorController::class, 'getAll']);
    Route::post('/', [ProveedorController::class, 'create']);
    Route::delete('/{id}', [ProveedorController::class, 'delete']);
    Route::get('/{id}', [ProveedorController::class, 'get']);
    Route::put('/{id}', [ProveedorController::class, 'update']);
});

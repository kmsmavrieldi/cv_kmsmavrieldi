<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('inventory', InventoryController::class);
Route::get('/inventory', [InventoryController::class,'index']);
Route::get('/inventory/{id}', [InventoryController::class,'show']);
Route::post('/inventory', [InventoryController::class,'store']);
Route::put('/inventory/{id}', [InventoryController::class,'update']);
Route::put('/inventory/purchase/{id}', [InventoryController::class,'purchase']);

Route::delete('/inventory/{id}', [InventoryController::class,'destroy']);

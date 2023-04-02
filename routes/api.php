<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

# Acessar o CRUD de products pela API
Route::get('/products', [ApiController::class, 'getAllProducts']);
Route::get('/products/{id}', [ApiController::class, 'getProduct']);

Route::post('/products', [ApiController::class, 'createProduct']);

Route::put('/products/{id}', [ApiController::class, 'updateProduct']);
Route::delete('/products/{id}',[ApiController::class, 'deleteProduct']);

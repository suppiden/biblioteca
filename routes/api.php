<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
Route::get('libros', [ApiController::class, 'index']);
Route::post('libros', [ApiController::class, 'store']);
Route::delete('libros/{id}', [ApiController::class, 'destroy']);

Route::post('/login', [ApiController::class, 'login'])->name('login');
Route::get('/login', [ApiController::class, 'login'])->name('login');
Route::post('/register', [ApiController::class, 'register']);

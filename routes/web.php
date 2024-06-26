<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\MarcheController;
use App\Http\Controllers\FaqController;

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
    return view('accueil');
});

Route::get('register', [AuthController::class, 'inscription']);
Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'index']);
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('users', [AdminUserController::class, 'store']);
    Route::get('users', [AdminUserController::class, 'index']);
    
    Route::get('dashbord', [AuthController::class, 'accueil']);
    //marché
    Route::get('marches', [MarcheController::class, 'index']);
    Route::post('marches', [MarcheController::class, 'store']);
    Route::get('marches/{id}', [MarcheController::class, 'show']);
    Route::put('marches/{id}', [MarcheController::class, 'update']);
    Route::delete('marches/{id}', [MarcheController::class, 'destroy']);
    Route::get('total-marches', [MarcheController::class, 'getTotalMarches']);
    

});
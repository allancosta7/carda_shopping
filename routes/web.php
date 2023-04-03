<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

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

Route::get('carousel', [PaginaController::class, 'carousel']);
Route::get('categorias', [PaginaController::class, 'categoria']);
Route::get('/', [PaginaController::class, 'home']);
Route::get('/loja', [PaginaController::class, 'loja']);
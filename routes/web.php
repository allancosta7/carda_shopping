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

Route::get('/', [PaginaController::class, 'index']);
Route::get('/resultado_pesquisa_loja', [PaginaController::class, 'resultado_pesquisa_loja']);
Route::get('/quem_somos', [PaginaController::class, 'quem_somos']);
Route::get('/perfil_loja', [PaginaController::class, 'perfil_loja']);
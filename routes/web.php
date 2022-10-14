<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome');});
Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/clientes/cadastrar', [ClientesController::class, 'cadastrar']);
Route::get('/clientes/editar/{id}', [ClientesController::class, 'editar']);
Route::POST('/clientes/salvar', [ClientesController::class, 'salvar']);
Route::POST('/clientes/atualizar/{id}', [ClientesController::class, 'atualizar']);
Route::POST('/clientes/apagar/{id}', [ClientesController::class, 'apagar']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContasPagarController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contas', [ContasPagarController::class, 'Listar'])->name('contas.listar');
Route::post('/contas/salvar', [ContasPagarController::class, 'salvar'])->name('contas.salvar');
Route::get('/contas/cadastro', [ContasPagarController::class, 'cadastro'])->name("contas.cadastrar");
Route::get('/contas/editar/{id}', [ContasPagarController::class, 'editar'])->name("contas.editar");
Route::post('/contas/update/{id}', [ContasPagarController::class, 'update'])->name("contas.update");

Route::get('/contas/apagar/{id}', [ContasPagarController::class, 'apagar'])->name("contas.apagar");

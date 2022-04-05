<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\TarefaAtivaController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('colaboradores', ColaboradorController::class)->parameter('colaboradores', 'colaborador');
Route::get('colaboradores-ativos', [ColaboradorController::class, 'ativos'])->name('colaboradores.ativos');
Route::get('colaboradores-inativos', [ColaboradorController::class, 'inativos'])->name('colaboradores.inativos');

Route::resource('projetos', ProjetoController::class)->parameter('projetos', 'projeto');
Route::resource('tarefas', TarefaController::class)->parameter('tarefas', 'tarefa');
Route::resource('tarefasativas', TarefaAtivaController::class)->parameter('tarefasativas', 'tarefaativa');

Route::post('tarefas-store-ajax', [TarefaController::class, 'tarefasStoreAjax']);

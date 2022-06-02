<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\IndexController;
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

// Route::get('/professor/lista', [ProfessorController::class, 'lista']);
// Route::get('/professor/novo', [ProfessorController::class, 'novo']);
// Route::post('/professor/salvar', [ProfessorController::class, 'salvar']);

Route::get('/categoria/lista',[CategoriaController::class, 'lista']);
Route::get('/categoria/novo', [CategoriaController::class, 'novo']);
Route::post('/categoria/salvar', [CategoriaController::class, 'salvar']);
Route::get('/categoria/editar/{id}',[CategoriaController::class, 'editar']);
Route::get('/categoria/excluir/{id}',[CategoriaController::class, 'excluir']);

Route::get('/categoria/url', [CategoriaController::class, 'url']);

//inicio rota áreas
Route::get('/area/lista',[AreaController::class, 'lista']);
Route::get('/area/novo', [AreaController::class, 'novo']);
Route::post('/area/salvar', [AreaController::class, 'salvar']);
Route::get('/area/editar/{id}',[AreaController::class, 'editar']);
Route::get('/area/excluir/{id}',[AreaController::class, 'excluir']);

Route::get('/area/url', [AreaController::class, 'url']);
//fim rotas áreas

// inicio rotas empresas
Route::get('/empresa/lista',[EmpresaController::class, 'lista']);
Route::get('/empresa/novo', [EmpresaController::class, 'novo']);
Route::post('/empresa/salvar', [EmpresaController::class, 'salvar']);
Route::get('/empresa/editar/{id}',[EmpresaController::class, 'editar']);
Route::get('/empresa/excluir/{id}',[EmpresaController::class, 'excluir']);

Route::get('/', [IndexController::class, 'index']);

// fim rotas empresas

Route::get('/noticia/lista',[NoticiaController::class, 'lista']);
Route::get('/noticia/novo', [NoticiaController::class, 'novo']);
Route::post('/noticia/salvar', [NoticiaController::class, 'salvar']);
Route::get('/noticia/editar/{id}',[NoticiaController::class, 'editar']);
Route::get('/noticia/excluir/{id}',[NoticiaController::class, 'excluir']);

Route::get('/', [IndexController::class, 'index']);

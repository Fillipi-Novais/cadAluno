<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\CadastroController;


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
/* ----------------- Cadastro ------------------*/
Route::get('/cadastro', function() {
    return view('cadastro');
});
Route::post('/cadastro', [LoginController::class, 'create']);

/* ----------------- Atualização ------------------*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/project', function () {
   return view('project');
});
/* ----------------- LOGIN ------------------*/
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'autenticarLogin']);


/* ----------------- MENU ------------------*/
Route::get('/menu', function () {
  return view('menu');
});

/* ----------------- CADASTRO ------------------*/
Route::get('/cadastro', function () {
  return view('cadastro');
});
Route::post('/cadastro', [LoginController::class, 'create']);
Route::get('/cadastro', [LoginController::class, 'retornoCadastro']);

/* ----------------- MATRICULA ------------------*/
Route::get('/matricula', function () {
  return view('/matricula');
});
Route::post('/matricula', [LoginController::class, 'createMatricula']);
Route::get('/matricula', [LoginController::class, 'retornoMatricula']);
Route::get('/periodoMatricula', [LoginController::class, 'escolhaPeriodo']);
Route::get('/consultaCad', [LoginController::class, 'preenchimentoDadosMatricula']);

/* ----------------- CONSULTA -------------------*/
Route::get('/consulta', function () {
  return view('/consulta');
});
/* ----------------- ALTERAÇÃO -------------------*/
Route::get('/alteracao', function () {
  return view('/alteracao');
});
Route::get('/alterDados', [MatriculaController::class, 'update'])->name('alter-dados');
/* ----------------- ARQUIVO ---------------------*/
Route::get('/arquivo', function () {
  return view('/arquivo');
});
/* ----------------- SECRETARIA ---------------------*/
Route::get('/secretaria', function () {
  return view('/secretaria');
});
/* ----------------- FISCAL ---------------------*/
Route::get('/fiscal', function () {
  return view('/fiscal');
});
/* ----------------- FINANCEIRO ---------------------*/

/* ----------------- RELATORIOS ---------------------*/
Route::get('/relatorios', function () {
  return view('/relatorios');
});
/* ----------------- CATRACA ---------------------*/


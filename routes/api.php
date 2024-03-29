<?php

use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\CadastroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/* ----------------- CONSULTA -------------------*/
Route::get('/raConsulta', [ConsultaController::class, 'raConsulta']);


/* ----------------- CONSULTA -------------------*/
Route::get('/consulta', [CadastroController::class, 'consulta']);

/* ----------------- Atualização -------------------*/

Route::post('/atualizacao', [CadastroController::class, 'update']);

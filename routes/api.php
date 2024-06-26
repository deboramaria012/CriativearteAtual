<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth:sanctum', 'cliente'])->group(function () {
    Route::apiResource('cliente', ClienteController::class);
    Route::get('aluno/{id}/matricula', [ClienteController::class, 'getMatricula']);
    Route::get('aluno/{id}/plano', [ClienteController::class, 'getPlano']);
    Route::get('aluno/{id}/aula', [ClienteController::class, 'getAula']);
});
Route::post('/login', [ClienteController::class, 'login']);


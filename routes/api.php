<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PresencaController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TipoPresencaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/teachers',[TeacherController::class,'index']);
Route::prefix('/teacher')->group(function () {
    Route::get('/{id}', [TeacherController::class, 'show']);
    Route::post('/', [TeacherController::class, 'store']);
    Route::put('/{id}', [TeacherController::class, 'update']);
    Route::delete('/{id}', [TeacherController::class, 'destroy']);
});

Route::get('/alunos',[AlunoController::class,'index']);
Route::prefix('/aluno')->group(function () {
    Route::get('/{id}', [AlunoController::class, 'show']);
    Route::post('/', [AlunoController::class, 'store']);
    Route::put('/{id}', [AlunoController::class, 'update']);
    Route::delete('/{id}', [AlunoController::class, 'destroy']);
});

Route::get('/cursos',[MateriaController::class,'index']);
Route::prefix('/curso')->group(function () {
    Route::get('/{id}', [MateriaController::class, 'show']);
    Route::post('/', [MateriaController::class, 'store']);
    Route::put('/{id}', [MateriaController::class, 'update']);
    Route::delete('/{id}', [MateriaController::class, 'destroy']);
});

Route::get('/salas',[CursoController::class,'index']);

Route::get('/classes',[ClasseController::class,'index']);
Route::prefix('/classe')->group(function () {
    Route::get('/{id}', [ClasseController::class, 'show']);
    Route::post('/', [ClasseController::class, 'store']);
    Route::put('/{id}', [ClasseController::class, 'update']);
    Route::delete('/{id}', [ClasseController::class, 'destroy']);
});

Route::get('/presencas',[PresencaController::class,'index']);
Route::prefix('/presenca')->group(function () {
    Route::get('/{id}', [PresencaController::class, 'show']);
    Route::post('/', [PresencaController::class, 'store']);
    Route::put('/{id}', [PresencaController::class, 'update']);
    Route::delete('/{id}', [PresencaController::class, 'destroy']);
});

Route::get('/t_presencas',[TipoPresencaController::class,'index']);
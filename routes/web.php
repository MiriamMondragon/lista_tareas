<?php

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

Auth::routes();

Route::post('/tarea', [App\Http\Controllers\TareasController::class, 'store']);
Route::get('/tarea/{tarea}/edit', [App\Http\Controllers\TareasController::class, 'edit'])->name('tareas.edit');
Route::patch('/tarea/{tarea}', [App\Http\Controllers\TareasController::class, 'update']);
Route::delete('/tarea/{tarea}', [App\Http\Controllers\TareasController::class, 'delete']);
Route::get('/', [App\Http\Controllers\TareasController::class, 'index'])->name('tareas.show');

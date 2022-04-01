<?php

use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/{task}/edit', [TaskController::class, 'edit']);
Route::get('/{task}/toggle', [TaskController::class, 'toggleCompleted']);
Route::get('/{task}/delete', [TaskController::class, 'destroy']);
Route::post('/', [TaskController::class, 'store']);
Route::put('/{task}', [TaskController::class, 'update']);
Route::get('/clear-completed', [TaskController::class, 'clearCompleted']);


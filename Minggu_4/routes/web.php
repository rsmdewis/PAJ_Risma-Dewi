<?php

use Illuminate\Support\Facades\Route;
// Menggunakan controller TaskController
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route untuk menampilkan task App
Route::get('/task', [TaskController::class, 'index']);

// Route untuk menampilkan method show dalam TaskController
Route::get('/task/{task}', [TaskController::class, 'show']);

// Route untuk menampilkan method edit dalam TaskController
Route::get('task/{id}/edit', [TaskController::class, 'edit']);
// Route untuk menampilkan method update dalam TaskController
Route::put('task/{task}', [TaskController::class, 'update']);

// Route untuk menampilkan method create dalam TaskController
Route::get('/task/create', [TaskController::class, 'create']);

// Route untuk menampilkan method create dalam TaskController
Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');

// Route untuk menampilkan method delete dalam TaskController
Route::delete('/task/{task}', [TaskController::class, 'delete']);


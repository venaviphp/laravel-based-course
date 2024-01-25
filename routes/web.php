<?php

use App\Http\Controllers\VisitorController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

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

# HomeController
Route::get('/', function () {
    return view('welcome');
});

# WorkerController
Route::get('/workers', [WorkerController::class, 'index'])->name('index');
Route::get('/workers/{worker}', [WorkerController::class, 'show'])->name('show');
Route::get('/workers/create', [WorkerController::class, 'create'])->name('create');
Route::get('/workers/update', [WorkerController::class, 'update'])->name('update');
Route::get('/workers/delete', [WorkerController::class, 'delete'])->name('delete');

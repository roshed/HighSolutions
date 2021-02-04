<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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
    if (Auth::check())
    return redirect('api?');
    else
    return redirect('login');
});

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware(['auth'])->name('logout');
Route::any('/api', [ApiController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::post('/api/{id}', [ApiController::class, 'store'])->middleware(['auth'])->name('editSave');//aktualizacja
Route::get('/api/{id}', [ApiController::class, 'update'])->middleware(['auth'])->name('edit');
Route::post('/api/delete/{id}', [ApiController::class, 'delete']);//usuwanie

require __DIR__.'/auth.php';

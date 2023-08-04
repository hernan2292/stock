<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InventarioController;

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
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('usuarios', UserController::class);

Route::resource('dependencias', DependenciaController::class);

Route::resource('inventarios', InventarioController::class);

Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ServerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'login'])->name('home.login');

// Route::resource('users', UsersController::class);
Route::get('/users/register', [UsersController::class, 'create'])->name('users.register');
Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

// Route::resource('servers', ServerController::class);
Route::get('servers/home', [ServerController::class, 'show'])->name('servers.home');
Route::get('servers/create', [ServerController::class, 'create'])->name('servers.create');
Route::post('servers/store', [ServerController::class, 'store'])->name('servers.store');

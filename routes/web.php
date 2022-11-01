<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\Auth\LoginController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function (){
    Route::get('dashboard', [LoginController::class, 'dashboard']);
});


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('logout', [LoginController::class, 'logout']);

// Route::resource('users', UsersController::class);
Route::get('/users/register', [UsersController::class, 'create'])->name('users.register');
Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');

// Route::resource('servers', ServerController::class);
Route::get('servers/home', [ServerController::class, 'show'])->name('servers.home');
Route::get('servers/create', [ServerController::class, 'create'])->name('servers.create');
Route::post('servers/store', [ServerController::class, 'store'])->name('servers.store');
Route::put('servers/update', [ServerController::class, 'update'])->name('servers.update');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

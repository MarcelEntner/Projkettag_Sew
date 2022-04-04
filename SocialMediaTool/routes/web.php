<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BeitragController;
use App\Http\Controllers\logindatencontroller;
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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/main', [App\Http\Controllers\MainPageController::class, 'index'])->name('main');
Route::get('/post', function(){
    return view('Post');
});

Route::get('/GetLoginData', [App\Http\Controllers\MainPageController::class, 'getlogindata'])->name('getlogindata');

Auth::routes();
Route::redirect('/register', '/');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('Beitrag', BeitragController::class);
Route::resource('logindaten', logindatencontroller::class);
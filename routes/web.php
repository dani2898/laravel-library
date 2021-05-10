<?php

use App\Http\Controllers\BookController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/test', [BookController::class, 'show'])->name('test');

Route::resource('/books', BookController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');
});

Route::middleware([IsUser::class])->group(function () {
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
});

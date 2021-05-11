<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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
Route::resource('/categories', CategoryController::class);
Route::resource('/users', UserController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::prefix('books')->group(function () {
        Route::get('/', [BookController::class, 'index'])->name('books.index');
        Route::get('/create', [BookController::class, 'create'])->name('books.create');
        Route::post('/store', [BookController::class, 'store'])->name('books.store');
        Route::post('/{$id}/edit', [BookController::class, 'edit'])->name('books.edit');
        Route::put('/{$id}', [BookController::class, 'update'])->name('books.update');
        Route::delete('/{$id}', [BookController::class, 'destroy'])->name('books.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::post('/{$id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{$id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{$id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::get('/create', [UserController::class, 'create'])->name('users.create');
        Route::post('/store', [UserController::class, 'store'])->name('users.store');
        Route::post('/{$id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('/{$id}', [UserController::class, 'update'])->name('categories.update');
        Route::delete('/{$id}', [UserController::class, 'destroy'])->name('users.destroy');
    });
});

Route::middleware([IsUser::class])->group(function () {
    Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('user');
});

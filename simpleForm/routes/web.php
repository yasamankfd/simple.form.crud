<?php

use App\Http\Controllers\UsersController;
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
    return view('welcome');
});
Route::get('/add', [UsersController::class,'index'])->name('index');

Route::get('/add/form', [UsersController::class,'show'])->name('show.form');

Route::post('/add/form', [UsersController::class,'addingUser'])->name('add.user');

Route::get('/add/{user}/edit', [UsersController::class,'edit'])->name('user.edit');
Route::put('/add/{user}/updating', [UsersController::class,'updating'])->name('update.user');
Route::delete('/add/{user}/del', [UsersController::class,'del'])->name('del.user');

<?php

use App\Http\Controllers\User\UserController;
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

Route::get('/', static function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user/{id}', [UserController::class, 'edit'])
    ->middleware(['auth'])->name('user')->whereNumber('id');

Route::get('/users', [UserController::class, 'list'])
    ->middleware(['auth'])
    ->name('users');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\Converter\FileUploadController;
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

Route::resource('users', UserController::class)
    ->middleware(['auth']);

Route::get('/converting', [FileUploadController::class, 'index'])
    ->middleware(['auth'])->name('converting');

Route::post('store', [FileUploadController::class, 'store'])
    ->middleware(['auth']);

require __DIR__.'/auth.php';

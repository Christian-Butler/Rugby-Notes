<?php

use App\Http\Controllers\PlayerController as AdminPlayerController;
use App\Http\Controllers\PlayerController as UserPlayerController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/players',PlayerController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

Route::resource('/admin/players', AdminPlayerController::class)->middleware(['auth'])->names('admin.players');

Route::resource('/user/players', UserBookController::class)->middleware(['auth'])->names('user.players')->only(['index', 'show']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TributeController;
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

Route::get('/mm', function () {
    \Artisan::call('migrate');

    return redirect('/');
});

Auth::routes();
Route::get('/', [App\Http\Controllers\TributeController::class, 'welcome'])->name('welcome');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/person', [App\Http\Controllers\TributeController::class, 'persom'])->name('persom');
Route::get('/view-tributes', [App\Http\Controllers\TributeController::class, 'tributes'])->name('tributes');

Route::post('store-person', [App\Http\Controllers\TributeController::class, 'storeuser'])->name('persom');

Route::post('store-tvc-envs', [App\Http\Controllers\TributeController::class, 'storetribute'])->name('persom');

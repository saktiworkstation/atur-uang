<?php

use App\Http\Controllers\FinpenController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(FinpenController::class)->group(function () {
        Route::get('/finpen', 'index')->name('finpen')->middleware('role:user');
        Route::get('/finpen/create', 'create')->name('finpen.create')->middleware('role:user');
        Route::post('/finpen/store', 'store')->name('finpen.store')->middleware('role:user');
        Route::post('/finpen/report', 'report')->name('finpen.report')->middleware('role:admin');
    });
});

require __DIR__.'/auth.php';

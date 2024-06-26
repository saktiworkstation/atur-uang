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

Route::controller(FinpenController::class)->group(function () {
    Route::post('/finpen/report', 'report')->name('finpen.report')->middleware('role:admin');
    Route::middleware(['auth', 'verified', 'role:user'])->group(function () {
        Route::get('/finpen', 'index')->name('finpen');
        Route::get('/finpen/create', 'create')->name('finpen.create');
        Route::post('/finpen/store', 'store')->name('finpen.store');
        Route::get('/finpen/show/{id}', 'show');
        Route::get('/finpen/edit/{id}', 'edit');
        Route::put('/finpen/update/{id}', 'update');
    });
});

require __DIR__.'/auth.php';

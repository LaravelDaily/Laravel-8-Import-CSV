<?php

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

Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');

Route::middleware('auth')->group(function () {
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::post('/import_parse', [\App\Http\Controllers\ImportController::class, 'parseImport'])->name('import_parse');
Route::post('/import_process', [\App\Http\Controllers\ImportController::class, 'processImport'])->name('import_process');

require __DIR__.'/auth.php';

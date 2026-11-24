<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CatatanController;
use App\Http\Controllers\HaloController;
use App\Http\Controllers\ProfileController;
use App\Models\Catatan;
use Illuminate\Support\Facades\Route;

Route::get('/', [BerandaController::class, 'index']);
Route::get('/halo', [HaloController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard', [
        'jumlahCatatan' => Catatan::count(),
    ]);
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/catatan', [CatatanController::class, 'index'])->name('catatan.index');
    Route::get('/catatan/tambah', [CatatanController::class, 'create'])->name('catatan.create');
    Route::post('/catatan', [CatatanController::class, 'store'])->name('catatan.store');
    Route::get('/catatan/{id}', [CatatanController::class, 'show'])->name('catatan.show');
    Route::get('/catatan/{id}/edit', [CatatanController::class, 'edit'])->name('catatan.edit');
    Route::put('/catatan/{id}', [CatatanController::class, 'update'])->name('catatan.update');
    Route::delete('/catatan/{id}', [CatatanController::class, 'destroy'])->name('catatan.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

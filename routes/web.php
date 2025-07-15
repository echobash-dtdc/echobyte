<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('products', App\Http\Controllers\ProductController::class);
    Route::resource('orders', App\Http\Controllers\OrderController::class);
    // Only allow create and store for integrations
    Route::get('integrations/create', [App\Http\Controllers\IntegrationController::class, 'create'])->name('integrations.create');
    Route::post('integrations', [App\Http\Controllers\IntegrationController::class, 'store'])->name('integrations.store');
});

require __DIR__.'/auth.php';

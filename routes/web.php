<?php

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

            Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
            Route::get('/products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
            Route::post('/products/create', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
            Route::get('/products/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
            Route::post('/products/edit/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');


            Route::get('/sales', [\App\Http\Controllers\SaleController::class, 'index'])->name('sales.index');
            Route::get('/sales/create', [\App\Http\Controllers\SaleController::class, 'create'])->name('sales.create');
            Route::post('/sales/create', [\App\Http\Controllers\SaleController::class, 'store'])->name('sales.store');
            Route::get('/sales/edit/{id}', [\App\Http\Controllers\SaleController::class, 'edit'])->name('sales.edit');
            Route::post('/sales/edit/{id}', [\App\Http\Controllers\SaleController::class, 'update'])->name('sales.update');
        });

        require __DIR__ . '/auth.php';

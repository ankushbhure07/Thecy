<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\ContactController;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/items', [HomeController::class, 'items'])->name('items');
Route::get('/gifting', [HomeController::class, 'gifting'])->name('gifting');
Route::get('/single/{id}', [SingleController::class, 'index'])->name('single');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::resource('contact', ContactController::class);

Route::middleware(['auth', 'verified'])->group(function () {

    Route::resource('product', ProductController::class);

    Route::get('/dashboard', function () {
        return view('dashboard/index');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

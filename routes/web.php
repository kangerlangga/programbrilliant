<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublikController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublikController::class, 'coming'])->name('home.publik');

// Rute Admin
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dash');
    Route::get('/admin/profile/edit', [AdminController::class, 'editProf'])->name('prof.edit');
    Route::post('/admin/profile/updateProfile', [AdminController::class, 'updateProf'])->name('prof.update');
    Route::get('/admin/profile/editPass', [AdminController::class, 'editPass'])->name('prof.edit.pass');
    Route::post('/admin/profile/updatePass', [AdminController::class, 'updatePass'])->name('prof.update.pass');

    // Route::get('/admin/home', [HomeSliderController::class, 'index'])->name('home.data');
    // Route::get('/admin/home/add', [HomeSliderController::class, 'create'])->name('home.add');
    // Route::post('/admin/home/store', [HomeSliderController::class, 'store'])->name('home.store');
    // Route::get('/admin/home/edit/{id}', [HomeSliderController::class, 'edit'])->name('home.edit');
    // Route::post('/admin/home/update/{id}', [HomeSliderController::class, 'update'])->name('home.update');
    // Route::get('/admin/home/delete/{id}', [HomeSliderController::class, 'destroy'])->name('home.delete');

    // Route::get('/admin/product', [ProductController::class, 'index'])->name('product.data');
    // Route::get('/admin/product/add', [ProductController::class, 'create'])->name('product.add');
    // Route::post('/admin/product/store', [ProductController::class, 'store'])->name('product.store');
    // Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    // Route::post('/admin/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    // Route::get('/admin/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.delete');

    // Route::get('/admin/message', [MessageController::class, 'index'])->name('message.data');
    // Route::get('/admin/message/detail/{id}', [MessageController::class, 'show'])->name('message.detail');
    // Route::post('/admin/message/update/{id}', [MessageController::class, 'update'])->name('message.update');
    // Route::get('/admin/message/delete/{id}', [MessageController::class, 'destroy'])->name('message.delete');

    // Route::get('/admin/user', [UserController::class, 'index'])->name('user.data');
    // Route::get('/admin/user/add', [UserController::class, 'create'])->name('user.add');
    // Route::post('/admin/user/store', [UserController::class, 'store'])->name('user.store');
    // Route::get('/admin/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    // Route::post('/admin/user/update/{id}', [UserController::class, 'update'])->name('user.update');
    // Route::get('/admin/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    // Route::get('/admin/user/resetPass/{id}', [UserController::class, 'resetPass'])->name('user.resetpass');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';

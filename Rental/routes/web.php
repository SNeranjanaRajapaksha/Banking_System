<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/', [HomeController::class, 'adminHome'])->name('profile.admin'); 



Route::get('/admin/customer/add', [AdminController::class, 'showCustomerForm'])->name('admin.showCustomerForm');
Route::post('/admin/customer/register', [AdminController::class, 'registerCustomer'])->name('admin.registerCustomer');
Route::get('/admin/payment/add', [AdminController::class, 'showPaymentForm'])->name('admin.showPaymentForm');
Route::post('/admin/payment/add', [AdminController::class, 'addPayment'])->name('admin.addPayment');
Route::get('/admin/customer/{id}', [AdminController::class, 'viewCustomerProfile'])->name('admin.viewCustomerProfile');
Route::get('/admin/customer/search', [AdminController::class, 'searchCustomer'])->name('admin.searchCustomer'); 



require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserAccountController;

// Home, Deals, Cart, Shop, etc.
Route::get('/', [PageController::class, 'home']);
Route::get('/deals', [PageController::class, 'deals']);
Route::get('/cart', [PageController::class, 'cart']);
Route::get('/new', [PageController::class, 'new']);
Route::get('/bestsellers', [PageController::class, 'bSellers']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/reset', [PageController::class, 'reset']);

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

// Register Routes (Make sure to use RegisterController here)
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

// Admin Routes - Protected by Auth and admin.access middleware
Route::middleware(['auth', 'admin.access'])->group(function () {
    Route::get('/admin_page', [AdminController::class, 'adminPage'])->name('admin.dashboard');
    
    Route::get('/admin/UserAccount', [UserAccountController::class, 'index'])->name('admin.UserAccount');

    // Create a new user (from the Add Account modal)
    Route::post('/admin/UserAccount', [UserAccountController::class, 'store'])->name('admin.UserAccount.store');
    
    // Update an existing user (from the Edit modal)
    Route::put('/admin/UserAccount/{id}', [UserAccountController::class, 'update'])->name('admin.UserAccount.update');
    
    // Delete a user
    Route::delete('/admin/UserAccount/{id}', [UserAccountController::class, 'destroy'])->name('admin.UserAccount.destroy');

    
    
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products');
    Route::get('/admin/create_products', [ProductController::class, 'createProduct'])->name('admin.sub-pages.create_product');
    Route::get('/admin/edit_products/{id?}', [ProductController::class, 'edit'])->name('admin.sub-pages.edit_products');
    Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products');
    
    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::put('/admin/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');


});



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AccountController;

Route::get('/', [PageController::class, 'home']);
Route::get('/deals', [PageController::class, 'deals']);
Route::get('/cart', [PageController::class, 'cart']);
Route::get('/new', [PageController::class, 'new']);
Route::get('/bestsellers', [PageController::class, 'bSellers']);
Route::get('/shop', [PageController::class, 'shop']);
Route::get('/reset', [PageController::class, 'reset']);
Route::get('/register', [PageController::class, 'register']);
use App\Http\Controllers\Auth\LogoutController;


// ✅ This one remains
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');


// ✅ Admin page route with middleware
Route::get('/admin_page', function () {
    return view('admin.index');
})->middleware(['auth', 'admin.access']);
?>
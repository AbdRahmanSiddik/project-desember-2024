<?php

use App\Http\Controllers\Teller\RekeningController;
use App\Http\Controllers\Admin\CustomerService;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\auth\AccountController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', function () {
        return view('welcome');
    })->name('home');
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login'])->name('login.create');
    Route::get('/register', [SessionController::class, 'register'])->name('register');
    Route::post('/register', [SessionController::class, 'regist'])->name('register.create');
});

// bagian email verification
Route::middleware('auth')->group(function(){
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::post('email/resend/{token}', [SessionController::class, 'resendEmail'])->name('verification.resend');
    Route::get('email/verify/{token}', [SessionController::class, 'verifyEmail'])->name('verification.verify');

});

// bagian logout dan dashboard
Route::middleware(['auth','verified'])->group(function(){
    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth','verified','role:admin,operator'])->group(function(){

    // bagian kategori
    Route::get('/kategori',[KategoriController::class, 'index'])->name('kategori.index');
    Route::post('/kategori',[KategoriController::class, 'store'])->name('kategori.store');
    Route::put('/kategori/{kategori}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])->name('kategori.destroy');

    // bagian profile cabang
    Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/create',[ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile',[ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/{profile}',[ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/{profile}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{profile}',[ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/{profile}',[ProfileController::class, 'destroy'])->name('profile.destroy');

    // bagian customer service
    Route::get('/customer-service', [CustomerService::class, 'index'])->name('customer-service.index');
    Route::get('/customer-service/create', [CustomerService::class, 'create'])->name('customer-service.create');
    Route::post('/customer-service', [CustomerService::class, 'store'])->name('customer-service.store');
    Route::get('/customer-service/{customer_service}', [CustomerService::class, 'show'])->name('customer-service.show');
    Route::get('/customer-service/{customer_service}/edit', [CustomerService::class, 'edit'])->name('customer-service.edit');
    Route::patch('/customer-service/{customer_service}', [CustomerService::class, 'update'])->name('customer-service.update');
    Route::delete('/customer-service/{customer_service}', [CustomerService::class, 'destroy'])->name('customer-service.destroy');

    // bagian suspend dan unsuspend akun CS
    Route::patch('/suspend/{suspend}', [AccountController::class, 'suspend'])->name('suspend');
    Route::patch('/unsuspend/{unsuspend}', [AccountController::class, 'unsuspend'])->name('unsuspend');

});

Route::middleware(['auth', 'verified', 'role:teller'])->group(function(){
    // bagian rekening
    Route::get('/rekening', [RekeningController::class, 'index'])->name('rekening.index');
    Route::get('/rekening/create', [RekeningController::class, 'create'])->name('rekening.create');
    Route::post('/rekening', [RekeningController::class, 'store'])->name('rekening.store');
    Route::get('/rekening/{rekening}', [RekeningController::class, 'show'])->name('rekening.show');
    Route::get('/rekening/{rekening}/edit', [RekeningController::class, 'edit'])->name('rekening.edit');
    Route::put('/rekening/{rekening}', [RekeningController::class, 'update'])->name('rekening.update');
    Route::delete('/rekening/{rekening}', [RekeningController::class, 'destroy'])->name('rekening.destroy');
});

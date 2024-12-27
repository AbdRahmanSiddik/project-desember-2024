<?php

use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/login', [SessionController::class, 'index'])->name('login');
    Route::post('/login', [SessionController::class, 'login'])->name('login.create');
});


Route::middleware(['auth','verified'])->group(function(){
    Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth','verified','role:admin'])->group(function(){

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
});



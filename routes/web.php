<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Admin\PostController;

Route::get('/', function () {
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

 //---backend---//
 Route::get('/', [IndexController::class,'index'])
 ->name('trangchu');
 
 Route::get('/login', [IndexController::class,'login'])
 ->name('login');
 
 Route::get('/register', [IndexController::class,'register'])
 ->name('register');
 
 
 Route::get('/admin/post/index', [PostController::class,'index'])->middleware(['auth', 'verified'])
 ->name('admin.post.index');
 
 Route::get('/admin/post/create', [PostController::class,'create'])->middleware(['auth', 'verified'])
 ->name('admin.post.create');
 
 Route::post('/admin/post/create', [PostController::class,'savecreate'])->middleware(['auth', 'verified'])
 ->name('admin.post.savecreate');
 
 Route::get('/admin/post/update/{id}', [PostController::class, 'update'])->middleware(['auth', 'verified'])
     ->name('admin.post.update');
 
 Route::post('/admin/post/update', [PostController::class, 'saveEdit'])->middleware(['auth', 'verified'])
     ->name('admin.post.saveEdit');    
 
 Route::get('/admin/post/delete/{id}', [PostController::class,'delete'])->middleware(['auth', 'verified'])
     ->name('admin.post.delete');
 

require __DIR__.'/auth.php';

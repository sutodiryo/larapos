<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Member;
use App\Livewire\User\Profile as UserProfile;
use App\Livewire\Product\Lists as ProductList;
use App\Livewire\Product\Add as ProductAdd;
use App\Livewire\Product\Categories as ProductCategory;
use App\Livewire\Transaction\Lists as TransactionList;

Route::get('/',  Login::class);
Route::get('/login',  Login::class)->name('login');

// Auth::routes(['verify' => true]);

Route::get('/logout', [Login::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  Dashboard::class)->name('dashboard');
    Route::get('/member',  Member::class)->name('member');

    Route::prefix('user')->as('user.')->group(function () {
        Route::get('/profile',  UserProfile::class)->name('profile');
    });

    Route::prefix('product')->as('product.')->group(function () {
        Route::get('/lists',  ProductList::class)->name('lists');
        Route::get('/add',  ProductAdd::class)->name('add');
        Route::get('/categories',  ProductCategory::class)->name('categories');
    });

    Route::prefix('transaction')->as('transaction.')->group(function () {
        Route::get('/lists',  TransactionList::class)->name('lists');
    });
});

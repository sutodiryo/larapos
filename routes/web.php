<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Member;
use App\Livewire\Product\Lists as ProductList;
use App\Livewire\Transaction\Lists as TransactionList;

Route::get('/',  Login::class);
Route::get('/login',  Login::class)->name('login');

// Auth::routes(['verify' => true]);

Route::get('/logout', function () {
    Session::flush();
    return redirect(route('login'));
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  Dashboard::class)->name('dashboard');
    Route::get('/member',  Member::class)->name('member');

    Route::prefix('product')->as('product.')->group(function () {
        Route::get('/lists',  ProductList::class)->name('lists');
        Route::get('/categories',  ProductList::class)->name('categories');
    });

    Route::prefix('transaction')->as('transaction.')->group(function () {
        Route::get('/lists',  TransactionList::class)->name('lists');
    });
});


// Route::get('/', function () {
//     return view('welcome');
// });

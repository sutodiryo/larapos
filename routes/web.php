<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\Member;

Route::get('/',  Login::class);
Route::get('/login',  Login::class)->name('login');

Route::get('/logout', function () {
    Session::flush();
    return redirect(route('login'));
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  Dashboard::class)->name('dashboard');
    Route::get('/member',  Member::class)->name('member');
});


// Route::get('/', function () {
//     return view('welcome');
// });

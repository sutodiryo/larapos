<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Session;

Route::get('/',  Login::class);
Route::get('/login',  Login::class)->name('login');

Route::get('/logout', function () {
    Session::flush();
    return redirect(route('login'));
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',  Dashboard::class)->name('dashboard');
});


// Route::get('/', function () {
//     return view('welcome');
// });

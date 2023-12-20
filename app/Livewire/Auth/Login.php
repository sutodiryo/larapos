<?php

namespace App\Livewire\Auth;

use Livewire\Component;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Jantinnerezo\LivewireAlert\LivewireAlert;
// use Illuminate\Support\Facades\Hash;

class Login extends Component
{
    use LivewireAlert;

    public $email;
    public $password;
    public $remember;

    protected $rules = [
        'email' => 'required',
        'password' => 'required',
    ];

    public function store()
    {
        $this->validate();

        if (Auth::guard('web')->attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {

            $this->flash('success', 'Berhasil Login!', [
                'position' => 'top-end',
                'timer' => 3000,
                'toast' => true,
            ]);

            return redirect()->route('dashboard');
        }

        $this->flash('warning', 'Login Gagal!', [
            'position' => 'top-end',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function logout()
    {
        Session::flush();

        return redirect(route('login'));
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.login');
    }
}

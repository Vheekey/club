<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $resetEmail;
    public $password;
    public $email;

    protected $rules = [
        'password' => 'required|min:6',
        'email' => 'required|email:dns|exists:users,email',
    ];

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('layouts.auth.index')
            ->slot('loginForm');
    }

    public function submit()
    {
        $validated = $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials)) {
            session()->flash('message', 'Successful Login');

            return $this->redirect(RouteServiceProvider::HOME);
        };

        return session()->flash('error', 'Invalid password and email combination');
    }

}

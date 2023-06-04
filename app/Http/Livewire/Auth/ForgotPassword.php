<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ForgotPassword extends Component
{
    public $resetEmail;

    protected $rules = [
        'resetEmail' => 'required|email:dns|exists:users,email',
    ];

    public function render()
    {
        return view('livewire.auth.forgot-password')
            ->layout('layouts.auth.index')
            ->slot('forgotPasswordForm');
    }

    public function resetPassword()
    {
        $validated = $this->validate();

        return session()->flash('message', 'Kindly reach out to the admin');
    }
}

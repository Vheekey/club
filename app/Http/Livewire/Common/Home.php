<?php

namespace App\Http\Livewire\Common;

use App\Models\User;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $users = User::query()->get();

        return view('livewire.common.home',
            ['users' => $users])
            ->layout('layouts.base')
            ->slot('home');
    }

}

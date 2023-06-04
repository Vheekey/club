<?php

namespace App\Http\Livewire\Common;

use Livewire\Component;

class MainMenu extends Component
{
    public function render()
    {
        return view('livewire.common.main-menu')
            ->layout('layouts.menu')
            ->slot('mainMenu');;
    }
    
}

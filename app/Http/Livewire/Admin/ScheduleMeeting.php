<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Services\Calendar\Providers\GoogleCalendar;
use App\Services\Mail\Providers\Gmail;
use Livewire\Component;

class ScheduleMeeting extends Component
{
    public function render()
    {
        return view('livewire.admin.schedule-meeting')
            ->layout('layouts.admin.manage-meeting')
            ->slot('schedule-meeting');
    }
}

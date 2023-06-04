<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Services\Calendar\Providers\GoogleCalendar;
use App\Services\Mail\Providers\Gmail;
use Livewire\Component;

class ScheduleMeeting extends Component
{
    public $title;
    public $email;
    public $description;
    public $on;
    public $starts;
    public $duration;
    public $validatedData;
    public $allEmailsArray;


    protected $rules = [
        'title' => 'required|string|min:5|max:255',
        'email' => 'required|array',
        'email.*' => 'required|exists:users,email',
        'description' => 'nullable|string|min:5|max:255',
        'on' => 'required|date|after:today',
        'starts' => 'required|date_format:H:i',
        'duration' => 'required|integer|min:1|max:90'
    ];

    public function render()
    {
        return view('livewire.admin.schedule-meeting')
            ->layout('layouts.admin.manage-meeting')
            ->slot('schedule-meeting');
    }

    public function createMeeting()
    {
        $this->resetValidation('email');

        $this->allEmailsArray = User::query()->pluck('email')->toArray();

        $this->email = $this->formatEmail();
        foreach ($this->email as $key => $email) {
            if (!in_array($email, $this->allEmailsArray)) {
                $this->addError('email', "$email is not a valid email");
                return;
            }
        }

        $this->validatedData = $this->validate();

        $this->createCalendarInvite();

        $this->sendEmail();

    }

    protected function prepareForValidation($attributes): array
    {
        if (is_null($this->email)) {
            $attributes['email'] = $this->allEmailsArray;
        } elseif (is_string($this->email)) {
            $attributes['email'] = explode(' ', $this->email);
        }

        return $attributes;
    }

    protected function formatEmail()
    {

        $emails = [];

        if (empty($this->email)) {
            $emails = $this->allEmailsArray;
        } elseif (is_string($this->email)) {
            $emails = explode(' ', $this->email);
        } else {
            $emails = $this->email;
        }

        return $emails;
    }

    protected function createCalendarInvite()
    {
        if (env("CALENDAR_INTEGRATED")) {
            (new GoogleCalendar)->addEvent($this->validatedData);
        }
    }

    protected function sendEmail()
    {
        $subject = $this->title ?: 'Meeting Invite';
        $message = $this->description ?: 'You are all invited to a meeting.';
        $message .= "<br> <b>Time: {$this->starts} (GMT+1) </b>";
        $message .= "<br> <b>Duration: {$this->duration} </b>";
        $message .= "<br> <b>Date: {$this->on} </b>";
        $message .= "<br> Thanks";

        return (new Gmail())
            ->addSubject($subject)
            ->addMessage($message)
            ->addMultipleContact($this->email)
            ->send();
    }
}

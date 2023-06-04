<?php


namespace App\Services\Mail;


use App\Models\User;

abstract class MailingAbstract implements MailingInterface
{
    public $attendees = [];
    public string $email;
    public string $body;
    public string $subject;

    public function send()
    {
        // TODO: Implement send() method.
    }

    public function addContact(string $email)
    {
        $this->attendees[] = $email;

        return $this;
    }

    public function addMultipleContact(array $emails)
    {
        $this->attendees = $emails;

        return $this;
    }

    public function addMessage(string $body)
    {
        $this->body = $body;

        return $this;
    }

    public function addSubject(string $subject)
    {
        $this->subject = $subject;

        return $this;
    }

    public function generateAttendees()
    {
        return User::whereIn('email', $this->attendees)->get();
    }
}

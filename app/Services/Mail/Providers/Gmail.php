<?php


namespace App\Services\Mail\Providers;



use App\Mail\MeetingInvite;
use App\Services\Mail\MailingAbstract;
use Illuminate\Support\Facades\Mail;

class Gmail extends MailingAbstract
{

    public function send()
    {
        $data = [
            'title' => $this->subject,
            'message' => $this->body
        ];

        return Mail::to($this->generateAttendees()->first()->email)
            ->send(
                new MeetingInvite($data)
            );
    }
}

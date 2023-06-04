<?php


namespace App\Services\Mail\Providers;



use App\Mail\MeetingInvite;
use App\Services\Mail\MailingAbstract;
use Illuminate\Support\Facades\Mail;

class Gmail extends MailingAbstract
{
//    public $attendees = [];
//    public string $email;


    public function send()
    {
//        dd($this->generateAttendees()->first()->email);
//        dd(env('GMAIL_FROM_ADDRESS'));
        $data = [
            'title' => $this->subject,
            'message' => $this->body
        ];
//        dd($data);
//        return Mail::to($this->generateAttendees()->first()->email)
        return Mail::to("vheeqy@gmail.com")
            ->send(
                new MeetingInvite($data)
            );
    }
}

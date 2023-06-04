<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MeetingInvite extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $title;
    public $message;
    public $from;

    /**
     * Create a new message instance.
     */
    public function __construct($data,$from="")
    {
        $this->title = $data['title'];
        $this->message = $data['message'];
        $this->from = $from ?: env('GMAIL_FROM_ADDRESS');
    }

    /**
     * Get the message envelope.
     */
//    public function envelope(): Envelope
//    {
//        return new Envelope(
//            subject: $this->title,
//            from: $this->from
//        );
//        return new Envelope(
//            subject: $this->title,
//            from: $this->from
//        );
//    }

    /**
     * Get the message content definition.
     */
//    public function content(): Content
//    {
//        return new Content(
//            markdown: 'mail.meeting-invite',
//            with: [
//                'message' => $this->message
//            ]
//        );
//    }

    public function build()
    {
        return $this->markdown('mail.meeting-invite', [$this->message]);
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}

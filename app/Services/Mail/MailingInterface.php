<?php


namespace App\Services\Mail;


interface MailingInterface
{

    public function send();

    public function addMultipleContact(array $emails);

    public function addContact(string $email);

    public function addSubject(string $subject);

    public function addMessage(string $body);

}

<?php


namespace App\Services\Mail;


use App\Services\Mail\Providers\Gmail;
use Illuminate\Support\Facades\Pipeline;

class Email
{
    public function send()
    {
        return app(Pipeline::class)
            ->send()
            ->through([
                Gmail::class
            ])
            ->then(
                function () {
                    return true;
                }
            );
    }
}

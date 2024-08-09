<?php

namespace App\Services;

class Mailer
{

    private $transport;


    public function __construct($transport)
    {
        $this->transport = $transport;
    }

    public function send($recipient, $subject, $message)
    {

        echo "Sending email to $recipient: $subject - $message using transport $this->transport";
    }

}
<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email_address;
    public $body;

    public function __construct(string $name, string $email_address, string $body) {
        $this->name = $name;
        $this->email_address = $email_address;
        $this->body = htmlentities($body);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("noreply@netennisfoundation.org")
                    ->view('emails.contact')
                    ->subject("New Inquiry From netennisfoundation.org");
    }
}
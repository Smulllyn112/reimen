<?php

namespace App\Mail;

use App\Contact;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserContacted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact; 

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Contact $contact)
    {
        return $this->markdown('mail.toContacter')
                ->from(env('MAIL_USERNAME'))
                ->subject("Köszönjük megkeresésed!");
       // return $this->markdown('emails.welcome')->subject('Please verify your account!');
    }
}



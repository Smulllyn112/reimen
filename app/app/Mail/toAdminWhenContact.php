<?php

namespace App\Mail;

use App\Contact;
use App\Email;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class toAdminWhenContact extends Mailable
{
    use Queueable, SerializesModels;
    public $contact;
    //$contacter = Contact::latest()->first();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.toAdmin')
                ->from(env('MAIL_USERNAME'))
                ->subject('Újabb kontakt felvétel-HORVÁTH SZÁLLÍTÁS');
    }
}

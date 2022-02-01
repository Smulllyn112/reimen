<?php

namespace App\Mail;

use App\NewsLetter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ToAdminWhenSubscribed extends Mailable
{
    use Queueable, SerializesModels;

    public $newsLetter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(NewsLetter $newsLetter)
    {
        $this->newsLetter = $newsLetter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(NewsLetter $newsLetter)
    {
        return $this->markdown('mail.toAdminWhenSubscribed')
                ->from(env('MAIL_USERNAME'))
                ->subject("Köszönjük Feliratkozásod!");
    }
}

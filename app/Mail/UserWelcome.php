<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserWelcome extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    /**
     * Create a n
     ew message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user= $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.welcome')
            ->with([
                'user' => $this->user
            ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterConfirmation extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $url;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
        $this->url  = url('/verify/' . $user->email_token);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject('Hi ' . $this->user->name . ', Please confirm your email address!')
                ->markdown('emails.auth.new-user-registered');
    }
}

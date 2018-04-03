<?php

namespace App\Listeners\Email;

use MailParser;
use App\Mail\DynamicEmail;
use App\Events\Email\SentMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ParseMail implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SentMail  $event
     * @return void
     */
    public function handle(SentMail $event)
    {
        $data = $event->data;

        if (!array_key_exists('user', $event->data)) {
            $data['user'] = $event->user;
        }


        // sent mail to parser
        $subject = MailParser::parse($event->template->subject, $data);
        $body    = MailParser::parse($event->template->template, $data);

        return Mail::to($event->to)->send(new DynamicEmail($subject, $body, $event->attachment));
    }
}

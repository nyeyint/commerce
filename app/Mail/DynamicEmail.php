<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class DynamicEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $subject;
    public $email_template;
    public $attachment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $template, $attachment = null)
    {
        $this->subject = $subject;
        $this->email_template = $template;
        $this->attachment = $attachment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if (null == $this->attachment) {
            return $this->from(setting('ecommerce.email_address'))
                      ->markdown('emails.dynamic-email')
                      ->subject($this->subject);
        }

        if (is_array($this->attachment)) {
            return $this->multipleAttachment($this->attachment)
                      ->from(setting('ecommerce.email_address'))
                      ->markdown('emails.dynamic-email')
                      ->subject($this->subject);
        } else {
            return $this->attach($this->attachment)
                      ->from(setting('ecommerce.email_address'))
                      ->markdown('emails.dynamic-email')
                      ->subject($this->subject);
        }
    }

    /**
     * Able to send multiple attachment.
     *
     * @return $this
     */

    protected function multipleAttachment(array $files = [])
    {
        foreach ($files as $key => $path) {
            $this->attach($path);
        }

        return $this;
    }
}

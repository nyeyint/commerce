<?php

namespace App\Events\Email;

use App\EmailTemplate;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SentMail
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Save the EmailTemplate instance
     *
     * @return EmailTemplate
     */
    public $template;

    /**
     * Save the required data
     *
     * @return array
     */
    public $data;

    /**
     * Set the ricipent email
     *
     * @return array
     */
    public $to;

    /**
     * Curent User
     *
     * @return array
     */
    public $user;

    /**
     * Curent User
     *
     * @return array
     */
    public $attachment;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(EmailTemplate $template, $data, $to, $attachment = null)
    {
        $this->template = $template;
        $this->data     = $data;
        $this->to       = $to;
        $this->user     = user();
        $this->attachment = $attachment;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}

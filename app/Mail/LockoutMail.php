<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LockoutMail extends Mailable
{
    use Queueable, SerializesModels;
    public $orders;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.lockout')
                    ->subject('Alerta de bloqueo de cuenta')
                    ->with(['orders' => $this->orders]);
    }
}
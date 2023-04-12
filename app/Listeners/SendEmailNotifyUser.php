<?php

namespace App\Listeners;

use App\Events\UserRegister;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailNotifyUser
{
    private $email;
    /**
     * Create the event listener.
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegister $event): void
    {

    }
}

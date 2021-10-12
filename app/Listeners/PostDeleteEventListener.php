<?php

namespace App\Listeners;

use App\Mail\PostMail;
use App\Events\PostDeleteEvent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PostDeleteEventListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(PostDeleteEvent $event)
    {
        Mail::to("aungkaungkhantakk123321@gmail.com")->send(new PostMail($event->post));
    }
}

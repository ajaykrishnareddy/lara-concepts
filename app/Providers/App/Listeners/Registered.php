<?php

namespace App\Providers\App\Listeners;

use App\Events\CreateUserEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Registered
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
     * @param  CreateUserEvent  $event
     * @return void
     */
    public function handle(CreateUserEvent $event)
    {
        //
    }
}

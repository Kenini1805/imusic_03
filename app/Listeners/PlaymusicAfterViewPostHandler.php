<?php

namespace App\Listeners;

use App\Events\ViewPostHandler;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PlaymusicAfterViewPostHandler
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
     * @param  ViewPostHandler  $event
     * @return void
     */
    public function handle(ViewPostHandler $event)
    {
        var_dump($event->music->view_count);
        $event->music->increment('view_count');
        var_dump($event->music->view_count);
        $event = null;
        return true;
    }
}

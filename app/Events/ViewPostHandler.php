<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Models\File;
use Illuminate\Session\Store;
use Session;
use Closure;

class ViewPostHandler
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    // public $music;
    // /**
    //  * Create a new event instance.
    //  *
    //  * @return void
    //  */
    // public function __construct(File $file = null)
    // {
    //     $this->music = $file;
    // }

    // *
    //  * Get the channels the event should broadcast on.
    //  *
    //  * @return Channel|array
    private $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle(File $post)
    {
        if (!$this->isPostViewed($post)) {
            $post->increment('view_count');
            $this->storePost($post);
        }
    }

    private function isPostViewed($post)
    {
        $viewed = $this->session->get('viewed_posts', []);
        return array_key_exists($post->id, $viewed);
    }

    private function storePost($post)
    {
        $key = 'viewed_posts.' . $post->id;

        $this->session->put($key, time());
    }
}

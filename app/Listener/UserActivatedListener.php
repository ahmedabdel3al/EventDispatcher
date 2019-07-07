<?php

namespace App\Listener;

use App\Contract\Listener;
use App\Contract\Event;

class UserActivatedListener  implements Listener
{
    public function handle(Event $event)
    {
        dump('UserActivatedListener', $event);
    }
}

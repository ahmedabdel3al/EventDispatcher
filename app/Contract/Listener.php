<?php

namespace App\Contract;

interface Listener
{
    public function handle(Event $event);
}

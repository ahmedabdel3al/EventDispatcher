<?php

namespace App\Event;

use App\Contract\Event;

class UserSignedEvent implements  Event
{
    protected $user;
    public function __construct($user)
    {
        $this->user = $user;
    }
}

<?php

namespace App;

use App\Contract\Listener;
use App\Contract\Event;

class Dispatcher
{

    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = ['App\Event\UserSignedEvent'=>
    [
     "App\Listener\UserSignedListener"
    ]];
    /**
     * 
     */
    public function get(Event $event)
    {
        if (!$this->has($event)) {
            dump('not found');
        }
        return  $this->listen[get_class($event)];
    }
    public function set(Event $event, Listener $listener)
    {
        if ($this->has($event)) {
            array_push($this->listen[get_class($event)], get_class($listener));
        } else {
            $this->listen[get_class($event)] = [get_class($listener)];
        }
    }
    protected function has(Event $event)
    {
        return isset($this->listen[get_class($event)]);
    }
    public function dispatch(Event $event){
      foreach ($this->get($event) as $listener) {
        $listener = new $listener(); 
         $listener->handle($event);
      }
    }
}

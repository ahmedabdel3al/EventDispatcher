<?php 
namespace App\Listener ;

use App\Contract\Listener;
use App\Contract\Event;

class UserSignedListener implements Listener
{
    public function __construct()
    {
        
    }
    public function handle(Event $event){
        dump('in listener',$event);
    }
}
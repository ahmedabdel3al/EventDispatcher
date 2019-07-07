<?php
use App\Dispatcher;
use App\Event\UserSignedEvent;
use App\Listener\UserActivatedListener;

require_once __DIR__ . '/vendor/autoload.php';



$dispatcher = new Dispatcher ;
$dispatcher->set(new UserSignedEvent('ahmed'), new UserActivatedListener);
$dispatcher->dispatch(new UserSignedEvent('ahmed'));
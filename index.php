<?php 
// Class autoloading 
require_once __DIR__.'/vendor/autoload.php';

use App\Controllers\EventController as EventController;

$event = new EventController; 

$event->eventCategory(55);

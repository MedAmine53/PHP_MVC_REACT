<?php  

namespace App\Controllers;
use App\Models\EventModel as Event;


class EventController
{
    private $model;

    public function __construct()
    {
        $this->model = new Event;
    }

    public function index() 
    {
        $events = $this->model->fetchAllEvents();
        echo json_encode([
            'events' => $events
        ], JSON_PRETTY_PRINT);
        return $events;
    }
}        
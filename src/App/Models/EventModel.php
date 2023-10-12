<?php 

namespace App\Models;
use App\Database\Database as DB;
use PDO;

class EventModel
{
    private $conn;

    public function __construct() 
    {
        $database = new DB;
        $this->conn = $database->connect();
    }

    public function fetchAllEvents()
    {
        $stmt = $this->conn->prepare("SELECT * FROM events");
        $stmt->execute();
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $events;
    }
}

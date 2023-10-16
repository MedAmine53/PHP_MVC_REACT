<?php 
// Class autoloading 
require_once __DIR__.'/vendor/autoload.php';

// Events
use App\Controllers\EventController as EventController;

// Categories
use App\Controllers\CategoryController as CategoryController;
$category = new CategoryController; 
$category->index();

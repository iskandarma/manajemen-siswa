<?php

require 'config/database.php';
require __DIR__ . '/models/Student.php';
require __DIR__ . '/controllers/StudentController.php';

// Create an instance of the Student model 
$studentModel = new Student($pdo);

$controller = new StudentController($studentModel);

$controller->index();

?>
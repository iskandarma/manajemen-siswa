<?php

require 'config/database.php';
require __DIR__ . '/models/Student.php';

// Create an instance of the Student model 
$studentModel = new Student($pdo);

$students = $studentModel->getAll();

require 'views/students/index.php';

?>
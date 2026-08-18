<?php

require 'config/database.php';
require __DIR__ . '/models/Student.php';

$studentModel = new Student($pdo);

$students = $studentModel->getAll();

require 'views/students/index.php';

?>
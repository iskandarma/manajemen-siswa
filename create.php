<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';
require __DIR__ . '/controllers/StudentController.php';

$studentModel = new Student($pdo);

$controller = new StudentController($studentModel);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller->store();

} else {

    $controller->create();

}
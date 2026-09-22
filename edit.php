<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';
require __DIR__ . '/controllers/StudentController.php';

$studentModel = new Student($pdo);

$controller = new StudentController($studentModel);

$id = $_GET['id'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller->update($id);

} else {

    $controller->edit($id);

}
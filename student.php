<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';
require __DIR__ . '/controllers/StudentController.php';

$id = $_GET['id'] ?? null;

$studentModel = new Student($pdo);

$student = $studentModel->find($id);

$controller = new StudentController($studentModel);

$id = $_GET['id'] ?? null;

$controller->show($id);
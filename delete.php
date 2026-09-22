<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';
require __DIR__ . '/controllers/StudentController.php';

$studentModel = new Student($pdo);
$controller = new StudentController($studentModel);

$id = $_GET['id'] ?? null;

if (!$id) {
    die('ID siswa tidak ditemukan.');
}

$controller->destroy($id);
<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';

$id = $_GET['id'] ?? null;

$studentModel = new Student($pdo);

$student = $studentModel->find($id);

if (!$student) {
    echo "Data siswa tidak ditemukan.";
    exit;
}

require __DIR__ . '/views/students/show.php';
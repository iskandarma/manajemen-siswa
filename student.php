<?php

require __DIR__ . '/config/database.php';

$id = $_GET['id'] ?? null;

$sql = "SELECT * FROM students WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'id' => $id
]);

$student = $stmt->fetch();

require __DIR__ . '/views/students/show.php';
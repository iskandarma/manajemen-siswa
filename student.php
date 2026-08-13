<?php

require __DIR__ . '/config/database.php';

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = $id";

$stmt = $pdo->query($sql);

$student = $stmt->fetch();

require __DIR__ . '/views/students/show.php';
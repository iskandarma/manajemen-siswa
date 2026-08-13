<?php

$host = '127.0.0.1';
$db = 'manajemen_siswa';
$user = 'root';
$pass = '';

$pdo = new PDO(
    "mysql:host=$host;dbname=$db;charset=utf8mb4",
    $user,
    $pass
);
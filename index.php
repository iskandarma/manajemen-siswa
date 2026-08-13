<?php

require 'config/database.php';

$sql = "SELECT * FROM students";

$stmt = $pdo->query($sql);

$students = $stmt->fetchAll();

require 'views/students/index.php';

?>
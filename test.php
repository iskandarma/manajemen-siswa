<?php

require __DIR__ . '/config/database.php';
require __DIR__ . '/models/Student.php';

$studentModel = new Student($pdo);

// $students = $studentModel->getAll();

// $students = $studentModel->find(2031);
// var_dump($students);

// $result = $studentModel->create([
//     'nis' => '25006',
//     'name' => 'Doni Saputra',
//     'gender' => 'L',
//     'class_name' => 'XI RPL 1',
//     'major' => 'Rekayasa Perangkat Lunak',
//     'birth_date' => '2005-05-15',
//     'birth_place' => 'Bandung',
// ]);


// $result = $studentModel->update(1, [
//     'nis' => '25001',
//     'name' => 'Andi Pratama Update',
//     'gender' => 'L',
//     'class_name' => 'XI RPL 2',
//     'major' => 'Rekayasa Perangkat Lunak',
//     'birth_date' => '2005-05-15',
//     'birth_place' => 'Bandung'
// ]);

// $result = $studentModel->delete(5);

// var_dump($result);
$students = $studentModel->getAll();

echo '<pre>';
print_r($students);
echo '</pre>';
<?php

echo "Manajemen Siswa";

$students = [
    [
        'nis' => '25001',
        'name' => 'Andi',
        'class' => 'XI RPL 1'
    ],
    [
        'nis' => '25002',
        'name' => 'Siti',
        'class' => 'XI RPL 1'
    ],
];

foreach ($students as $student) {
    echo $student['name'];
}

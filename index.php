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

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Siswa</title>
</head>
<body>

    <h1>Daftar Siswa</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach ($students as $index => $student): ?>

                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $student['nis'] ?></td>
                    <td><?= $student['name'] ?></td>
                    <td><?= $student['class'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</body>
</html>
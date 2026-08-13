<?php

require 'config/database.php';

echo "Manajemen Siswa";

$sql = "SELECT * FROM students";

$stmt = $pdo->query($sql);

$students = $stmt->fetchAll();

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
                    <td><?= $student['class_name'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>
    </table>

</body>
</html>
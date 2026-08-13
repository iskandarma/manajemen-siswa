<h1>Daftar Siswa</h1>

<table border="1" cellpadding="10">

    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($students as $index => $student): ?>

            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $student['nis'] ?></td>
                <td><?= $student['name'] ?></td>
                <td><?= $student['gender'] ?></td>
                <td><?= $student['class_name'] ?></td>
                <td><?= $student['major'] ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>


<?php require 'views/layouts/header.php'; ?>

<h1>Daftar Siswa</h1>

<a href="create.php">
    + Tambah Siswa
</a>

<table border="1" cellpadding="10">

    <thead>
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Aksi</th>
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
                <td>
                    <a href="student.php?id=<?= $student['id'] ?>">
                        Detail
                    </a>
                    <a href="edit.php?id=<?= $student['id'] ?>">
                        Edit
                    </a>
                    <a href="delete.php?id=<?= $student['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus siswa ini?')">
                        Hapus
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

<?php require 'views/layouts/footer.php'; ?>
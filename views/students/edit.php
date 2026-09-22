<?php require __DIR__ . '/../layouts/header.php'; ?>

<h1>Edit Data Siswa</h1>

<p>Silakan ubah data siswa berikut.</p>

<form action="/students/update?id=<?= $student['id'] ?>" method="POST">

    <table cellpadding="8">

        <tr>
            <td>
                <label for="nis">NIS</label>
            </td>
            <td>
                <input
                    type="text"
                    id="nis"
                    name="nis"
                    value="<?= htmlspecialchars($student['nis']) ?>"
                    required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="name">Nama</label>
            </td>
            <td>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="<?= htmlspecialchars($student['name']) ?>"
                    required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="birth_place">Tempat Lahir</label>
            </td>
            <td>
                <input
                    type="text"
                    id="birth_place"
                    name="birth_place"
                    value="<?= htmlspecialchars($student['birth_place']) ?>"
                    required>
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="birth_date">Tanggal Lahir</label>
            </td>
            <td>
                <input
                    type="date"
                    id="birth_date"
                    name="birth_date"
                    value="<?= htmlspecialchars($student['birth_date']) ?>"
                    required>
            </td>
        </tr>

        <tr>
            <td>
                <label>Jenis Kelamin</label>
            </td>
            <td>

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="L"
                        <?= $student['gender'] === 'L' ? 'checked' : '' ?>
                        required>
                    Laki-laki
                </label>

                <label>
                    <input
                        type="radio"
                        name="gender"
                        value="P"
                        <?= $student['gender'] === 'P' ? 'checked' : '' ?>>
                    Perempuan
                </label>

            </td>
        </tr>

        <tr>
            <td>
                <label for="class_name">Kelas</label>
            </td>
            <td>
                <input
                    type="text"
                    id="class_name"
                    name="class_name"
                    value="<?= htmlspecialchars($student['class_name']) ?>"
                    required>
            </td>
        </tr>

        <tr>
            <td>
                <label for="major">Jurusan</label>
            </td>
            <td>
                <input
                    type="text"
                    id="major"
                    name="major"
                    value="<?= htmlspecialchars($student['major']) ?>"
                    required>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>

                <button type="submit">
                    Update
                </button>

                <a href="/students">
                    Batal
                </a>

            </td>
        </tr>

    </table>

</form>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
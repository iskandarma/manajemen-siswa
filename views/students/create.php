<?php require __DIR__ . '/../layouts/header.php'; ?>

<h1>Tambah Siswa</h1>

<form action="/students" method="POST">

    <p>
        <label>NIS</label><br>
        <input
            type="text"
            name="nis"
            required
        >
    </p>

    <p>
        <label>Nama Lengkap</label><br>
        <input
            type="text"
            name="name"
            required
        >
    </p>

    <p>
        <label>Tempat Lahir</label><br>
        <input
            type="text"
            name="birth_place"
        >
    </p>

    <p>
        <label>Tanggal Lahir</label><br>
        <input
            type="date"
            name="birth_date"
        >
    </p>

    <p>
        <label>Jenis Kelamin</label><br>

        <label>
            <input
                type="radio"
                name="gender"
                value="L"
                required
            >
            Laki-laki
        </label>

        <label>
            <input
                type="radio"
                name="gender"
                value="P"
            >
            Perempuan
        </label>
    </p>

    <p>
        <label>Kelas</label><br>

        <input
            type="text"
            name="class_name"
            required
        >
    </p>

    <p>
        <label>Jurusan</label><br>

        <input
            type="text"
            name="major"
            required
        >
    </p>

    <p>
        <button type="submit">
            Simpan
        </button>

        <a href="/students">
            Batal
        </a>
    </p>

</form>

<?php require __DIR__ . '/../layouts/footer.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['npm']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                    <li><?= $mhs['alamat']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">Daftar Mahasiswa</h1>
            <ul class="list-group mt-3">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>
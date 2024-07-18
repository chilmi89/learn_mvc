<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['npm']; ?></h6>
            <p class="card-text"><?= $data['mhs']['jurusan']; ?></p>
            <p class="card-text"><?= $data['mhs']['alamat']; ?></p>
            <a href="<?= BASEURL; ?>/mahasiswa" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 ">
            <!-- Your generated code goes here -->
            <?php Flaser::flash(); ?>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <button type="button" class="btn btn-primary TampilmodalTambah" data-toggle="modal" data-target="#form_modal">
                Tambah data Mahasiswa
            </button>
            <h1 class="text-center">Daftar Mahasiswa</h1>
            <ul class="list-group mt-3">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $mhs['nama']; ?>
                        <div>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-primary">Detail</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger ml-2">Hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="btn btn-warning ml-2 Tampilmodalubah" data-toggle="modal" data-target="#form_modal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>

<!-- Button trigger modal -->
<div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST" id="ubahDataForm">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="npm">NPM:</label>
            <input type="text" class="form-control" id="npm" name="npm">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan:</label>
            <select class="form-control" id="jurusan" name="jurusan" >
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sistem Informasi">Sistem Informasi</option>
              <option value="Manajemen Informatika">Manajemen Informatika</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

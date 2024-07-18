<?php

// Class Mahasiswa merupakan controller untuk fitur mahasiswa
class Mahasiswa extends Controller
{
    // Method untuk menampilkan halaman utama daftar mahasiswa
    public function index()
    {   
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {   
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            Flaser::setFlash('Berhasil', 'ditambahkan', 'success');
            // redirect ke halaman utama mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flaser::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
            Flaser::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function GetUbah($id)
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($id));
    }

    public function ubah(){
        if($this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
            Flaser::setFlash('Berhasil', 'diubah', 'success');
            // redirect ke halaman utama mahasiswa
            header('Location: ' . BASEURL . '/mahasiswa');
            echo '<script>window.location.href = "' . BASEURL . '/mahasiswa";</script>';
            exit;
        } else {
            Flaser::setFlash('Gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
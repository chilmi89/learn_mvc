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
        var_dump($_POST);
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            // redirect ke halaman utama mahasiswa
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
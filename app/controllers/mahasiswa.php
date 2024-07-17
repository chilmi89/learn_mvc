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
}
<?php

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;
    // private $mhs = [
    //     ['nama' => 'achmad', 'npm' => '123456', 'jurusan' => 'Teknik Informatika', 'alamat' => 'Jl. Contoh No. 123'],
    //     ['nama' => 'budi', 'npm' => '234567', 'jurusan' => 'Sistem Informasi', 'alamat' => 'Jl. Contoh No. 456'],
    //     ['nama' => 'joko', 'npm' => '345678', 'jurusan' => 'Teknik Elektro', 'alamat' => 'Jl. Contoh No. 789'],
    //     ['nama' => 'siti', 'npm' => '456789', 'jurusan' => 'Teknik Kimia', 'alamat' => 'Jl. Contoh No. 1011'],
    //     ['nama' => 'lisa', 'npm' => '567890', 'jurusan' => 'Ilmu Komputer', 'alamat' => 'Jl. Contoh No. 1213'],
    //     ['nama' => 'rio', 'npm' => '678901', 'jurusan' => 'Teknik Industri', 'alamat' => 'Jl. Contoh No. 1415']
    // ];


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
}
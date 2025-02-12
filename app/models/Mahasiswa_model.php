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
        $this->db->query('SELECT * FROM mahasiswa WHERE id=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        if(empty($data['nama']) || empty($data['npm']) || empty($data['alamat']) || empty($data['jurusan'])) {
            return 0;
        }

        $query = "INSERT INTO mahasiswa (nama, npm, alamat, jurusan) VALUES (:nama, :npm, :alamat, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('npm', $data['npm']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();   
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    // public function GetdataUbah($id)
    // {
    //     $query = "SELECT * FROM mahasiswa WHERE id=:id";
    //     $this->db->query($query);
    //     $this->db->bind('id', $id);
    //     return $this->db->single();
    // }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET nama = :nama, npm = :npm, alamat = :alamat, jurusan = :jurusan WHERE id = :id";
        $this->db->query($query); // Pastikan query dipersiapkan terlebih dahulu
        $this->db->execute([
            ':nama' => $data['nama'],
            ':npm' => $data['npm'],
            ':alamat' => $data['alamat'],
            ':jurusan' => $data['jurusan'],
            ':id' => $data['id']
        ]);
        return $this->db->rowCount();
    }
}
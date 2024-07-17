<?php

class Mahasiswa_model{
    // private $mhs = [
    //     ['nama' => 'achmad', 'npm' => '123456', 'jurusan' => 'Teknik Informatika', 'alamat' => 'Jl. Contoh No. 123'],
    //     ['nama' => 'budi', 'npm' => '234567', 'jurusan' => 'Sistem Informasi', 'alamat' => 'Jl. Contoh No. 456'],
    //     ['nama' => 'joko', 'npm' => '345678', 'jurusan' => 'Teknik Elektro', 'alamat' => 'Jl. Contoh No. 789'],
    //     ['nama' => 'siti', 'npm' => '456789', 'jurusan' => 'Teknik Kimia', 'alamat' => 'Jl. Contoh No. 1011'],
    //     ['nama' => 'lisa', 'npm' => '567890', 'jurusan' => 'Ilmu Komputer', 'alamat' => 'Jl. Contoh No. 1213'],
    //     ['nama' => 'rio', 'npm' => '678901', 'jurusan' => 'Teknik Industri', 'alamat' => 'Jl. Contoh No. 1415']
    // ];

    private $dbh;
    private $stmt;
    
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->query('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
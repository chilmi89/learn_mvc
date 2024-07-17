<?php

class About extends Controller{
    // tampilan default about page
    public function index($nama = 'achmad' , $profesi = 'Programmer'){

        // membuat array untuk di tampilakan ke view
        $data['nama'] = $nama;
        $data['profesi'] = $profesi;
        $data['judul'] = 'about';

        // mengambil data dari controller dan menampilkan ke view
        $this->view('templates/header', $data);
        $this->view('about/index' , $data);
        $this->view('templates/footer');
    }

    // tampilan about page
    public function page(){

        // membuat array untuk di tampilakan ke view
        $data['judul'] = 'page';

        // mengambil data dari controller dan menampilkan ke view
        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}
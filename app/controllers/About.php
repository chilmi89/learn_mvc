<?php

class About {
    // tampilan default about page
    public function index($nama = 'achmad' , $profesi = 'Programmer'){
        echo 'Nama : ' . $nama . '<br>' . 'Profesi : ' . $profesi;
    }

    public function page(){
        echo 'about/index';
    }
}
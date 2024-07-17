<?php
    // Kelas Controller berfungsi sebagai base controller yang akan di-extend oleh controller lainnya
    class Controller  {
        // Method untuk menampilkan view
        // Parameter $view adalah nama file view yang akan ditampilkan
        // Parameter $data adalah array yang berisi data yang akan dikirimkan ke view
        public function view($view , $data = []){
            require '../app/views/' . $view . '.php';
        }
        public function model($model){
            require '../app/models/' . $model . '.php';
            // Membuat instance dari model yang diberikan
            return new $model();
        }
    }

?>

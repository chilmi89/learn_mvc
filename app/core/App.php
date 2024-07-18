<?php


class App{
    // property untuk controller, method, dan parameter
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];


    public function __construct(){
        $url = $this->parseUrl();
        // cek apakah ada file controller dengan nama yang sama
        if (isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')){
            // menimpa controller property
            $this->controller = $url[0];
            unset($url[0]);
            // var_dump($this->controller);
        }
        // var_dump($url);
        require '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        // var_dump($this->controller);

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if(!empty($url)){
            // var_dump($url);
            $this->params = array_values($url);
        }

        // jalankan controller && method , serta kirimkan params
        if ($this->controller == 'mahasiswa' && $this->method == 'hapus') {
            $this->controller->$this->method($this->params[0]);
        } else {
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
    }
    // parse url dan membersihkan / dan karakter
    public function parseURl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}



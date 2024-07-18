<?php
class Database {
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;


    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name (dsn) dan mengambil / diganti dengan properti
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name;

        // option untuk koneksi ke database optimasi koneksi ke database
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass ,$options);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }


    // membuat query yang flexibel
    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    // membuat bind untuk query yang flexibel
    public function bind($param, $value, $type = null)
    {
        if(is_null($type)){
            switch(true){
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        // menambahkan bind
        $this->stmt->bindValue($param, $value, $type);
    }

    // eksekusi query
    public function execute()
    {
        $this->stmt->execute();
    }
    // mengambil hasil query dengan jumlah banyak
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // mengambil hasil query dengan jumlah sedikit
    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // menghitung berapa baris yang masuk ke database
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }

}
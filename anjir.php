<?php
class DbConfig
{// private adalah menyembunyikan/menjaga agar tidak bisa di akses semua orang
    private $_host = 'localhost'; 
    private $_username ='zaki';
    private $_password ='';
    private $_database = 'dbslebew'; 

    protected $connection; 
     //protected property atau pun method tersebut tidak bisa diakses dari luar class. namun bisa diaksesoleh class itu sendiri atau turunan dari clas tersebut 
    public function _construct() {
        if (!isset($this->connection)){
            $this->connectin = new mysqli($this->_host, $this->_username, $this->_password, $this->database);
            if(!$this->connection){
 // if/jika koneksi ini eror akan keluar kata'Cannot connect to database server'
                echo 'Cannot connect to database server';
                exit;
            }
        }
        // untuk kembali ke data base
        return $this->connection;
    }

}

$koneksi=mysqli_connect("localhost","zaki","","dbslebew");
function query($query){
    global $koneksi;
    $result =mysqli_query ($koneksi,$query);
    $rose= [];
    while ($riri = mysqli_fetch_assoc($result)){
        $rose[] = $riri;
    
    }
    return $rose;
}
?>
<?php
include 'koneksi.php';

class database extends koneksi{

    public $koneksi;
    function __construct(){
        $this->koneksi = $this->connect();
    }

    function tampil_data(){
        $data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa");

        while($result = mysqli_fetch_array($data)){
            $hasil[] = $result;
        }
        return $hasil;
    }
}
?>
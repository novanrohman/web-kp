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


        function input($nama,$nim,$kelas,$email,$alamat){
            mysqli_query($this->koneksi, "INSERT INTO mahasiswa VALUES('','$nama','$nim','$kelas','$email','$alamat')");
        }


        function hapus($id){
            mysqli_query($this->koneksi, "DELETE FROM mahasiswa WHERE idmhs = '$id'");
        }


        function edit($id){
            $data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa WHERE idmhs='$id'");
            while($d = mysqli_fetch_array($data)){
                $hasil[] = $d;
            }
            return $hasil;
        }
    

        function update($nama, $nim, $kelas, $email, $alamat){
            mysqli_query($this->koneksi, "UPDATE mahasiswa SET 
            nama='$nama',
            nim='$nim', 
            kelas='$kelas', 
            email='email', 
            alamat='alamat' 
            WHERE idmhs ='$id'");
            
        }
    } 
?>
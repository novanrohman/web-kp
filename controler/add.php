<?php

include '../connection/db.php';

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$kelas=$_POST['kelas'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];

$query=mysqli_query($conn, "INSERT INTO mahasiswa VALUES('','$nama','$nim','$kelas','$email,'$alamat')");
// var_dump($query);

if($query) {
    echo "
    <script type='text/jacascript'>
        alert('Tambah Data Berhasil.');
    </script>";
    
}else{
    echo"
    <script type='text/jacascript'>
        alert('Ada Kesalahan Saat Input.');
    </script>";

    header("../View/data_mahasiswa.php");
      
}
?>
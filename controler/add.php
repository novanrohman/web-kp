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
    ?>
echo"
<script type='text/javascript'>
    alert('Tambah Data Berhasil.');
    window.location='../View/index.php?page=data_mahasiswa';
    </script>";
<?php
}else{
    ?>
echo"
<script type='text/javascript'>
    alert('Ada Kesalahan Saat Input.');
    window.location='../View/index.php?page=data_mahasiswa';
    </script>";
<?php
    header("index.php?page=data_mahasiswa" );
    //   ygftgsys3edaez
}

?>
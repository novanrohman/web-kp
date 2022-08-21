<?php

//koneksi database
include 'db_kp.php';

//menangkap data yang dikirim dari form
$nama = $_POST['nama_mahasiswa'];
$nik = $_POST['nik'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];

//menginput data ke database
mysqli_query($conn, "insert into mahasiswa values(' ', '$nama', '$nik', '$email', '$alamat', '$username', '$password')");

//mengalihkan halaman kembali ke index.php
header ("location:index.php");

?>
















<?php
$host = "localhost";
$user = "root";
$pass ="";
$db   ="db_kp";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){ //untuk cek koneksi
    die("tidak dapat terkoneksi dengan database");
}
$nama               = "";
$nim                = "";
$kelas              = "";
$email              = "";
$alamat             = "";
$user_id            = "";
$anggota_kelompok   = ""; 
$sukses             = "";
$error              = "";
?>


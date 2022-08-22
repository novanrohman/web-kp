<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];

if($aksi == "tambah"){
    $db->filter_input
    ($_POST['nama_mahasiswa'],
    $_POST['nim'],
    $_POST['kelas'],
    $_POST['alamat'],
    $_POST['email'],
    $_POST['anggota_kelompok']);
}

elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil.php");
}

elseif($aksi == "update"){
    $db->update
    ($_POST['id'],
    $_POST['nama_mahasiswa'],
    $_POST['nim'],
    $_POST['kelas'],
    $_POST['alamat'],
    $_POST['email'],
    $_POST['anggota_kelompok']);
    header("location:tampil.php");
}
?>
<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];

if($aksi == "tambah"){
    $db->filter_input
    ($_POST['id'],
    $_POST['nama_mahasiswa'],
    $_POST['nim'],
    $_POST['kelas'],
    $_POST['email'],
    $_POST['alamat'],
    $_POST['user_id'],
    $_POST['anggota_kelompok_id']);
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
    $_POST['email'],
    $_POST['alamat'],
    $_POST['user_id'],
    $_POST['anggota_kelompok_id']);
    header("location:tampil.php");
}
?>
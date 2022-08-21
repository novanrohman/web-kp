<?php 
include 'database.php';
$db = new database();
 
$aksi = $_GET['aksi'];

 if($aksi == "tambah"){
 	$db->input
    ($_POST['nim'],
    $_POST['nama'],
    $_POST['kelas'],
    $_POST['email'],
    $_POST['alamat']);
 	header("location:tampil.php");

 }
 
 elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['idmhs']);
	header("location:tampil.php");
 }

 elseif($aksi == "update"){
 	$db->update
    ($_POST['idmhs'],
    $_POST['nim'],
    $_POST['nama'],
    $_POST['kelas'],
    $_POST['email'],
    $_POST['alamat']);
 	header("location:tampil.php");
 }
?>
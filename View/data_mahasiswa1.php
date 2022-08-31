<?php
include ('../connection/db.php');

//query
$q1= "SELECT * FROM mahasiswa JOIN anggota_kelompok ON mahasiswa.`anggota_kelompok_id`=anggota_kelompok.`id_anggota` JOIN pendaftaran_kp ON pendaftaran_kp.`anggota_kelompok`=anggota_kelompok.`id_anggota`";

$result=mysqli_query($conn,$q1);
?>
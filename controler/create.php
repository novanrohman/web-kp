<?php
if(isset($_POST['submit'])) {
    $nama               = $_POST['nama'];
    $nim                = $_POST['nim'];
    $kelas              = $_POST['kelas'];  
    $email              = $_POST['email'];
    $alamat             = $_POST['alamat'];
    $user_id            = $_POST['user_id'];
    $anggota_kelompok   = $_POST['anggota_kelompok'];           

    if($nama && $nim && $kelas && $email && $alamat && $user_id && $anggota_kelompok) {
        $sql1   = "insert into mahasiswa(nama,nim,kelas,email,alamat,user_id,anggota_kelompok) values ('$nama','$nim','$kelas','$email','$alamat','$user_id','$anggota_kelompok')";
        $sq1    = mysqli_query($koneksi1,$sql1);
        if($q1){
            $sukses     = "Berhasil memasukkan data baru";
        }  else{
            $error      = "Gagal memasukkan data";
        }
    }
}
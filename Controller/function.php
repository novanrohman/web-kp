<?php

require "../connection/db.php";

function registDosen($data)
{
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $secPassword = mysqli_real_escape_string($conn, $data["secPassword"]);

  $role = $data["role"];
  $result = mysqli_query($conn, "SELECT user WHERE username = $username");
  if (mysqli_fetch_assoc($result)) {
    echo "<script> alert ('username sudah ada'); </scipt>";
    return false;
  }
  if ($password !== $secPassword) {
    echo "<script> alert('Password tidak sama');</script>";
    return false;
  }

  $password = md5($password);
  mysqli_query($conn, "INSERT INTO user (id, username, password, id_role) VALUES('','$username','$password','$role')");
  return mysqli_affected_rows($conn);
}

function tambah($data)
{
  global $conn;
  $tempat_kp = htmlspecialchars($data["tempat_kp"]);
  $alamat_kp = htmlspecialchars($data["alamat_kp"]);
  $tanggal_mulai = htmlspecialchars($data["tanggal_mulai"]);
  $tanggal_selesai = htmlspecialchars($data["tanggal_selesai"]);
  $id_anggota = ($data["id_anggota"]);
  $id_dosen =  ($data["id_dosen"]);
  $id_perusahaan =  ($data["id_perusahaan"]);
  $proposal = upload_prop();
  if (!$proposal) {
    return false;
  }
  $id_perusahaan =  ($data["id_perusahaan"]);
  $query = "INSERT INTO pendaftaran_kp VALUES ('','$tempat_kp','$alamat_kp','$tanggal_mulai','$tanggal_selesai','$proposal','$id_anggota','$id_dosen','$id_perusahaan')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
//upload
function upload_prop()
{
  $file = $_FILES['proposal']['name'];
  $lokasi = $_FILES['proposal']['tmp_name'];
  $ekstensiFileValid = ['pdf'];
  $error = $_FILES['proposal']['error'];
  $ekstensiFile = explode('.', $file);
  $ekstensiFile = strtolower(end($ekstensiFile));
  if ($error === 4) {
    echo "
        <script>
        alert('Masukan File Terlebih dahulu');
        </script>
        ";
  }
  if (!in_array($ekstensiFile, $ekstensiFileValid)) {
    echo "
        <script>
        alert('Pastikan File Berektensi PDF');
        </script>
        ";
    return false;
  }
  move_uploaded_file($lokasi, "filedocs/" . $file);
  return $file;
}

// Membuat fungsi hapus
function del($id)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM pendaftaran_kp WHERE id = $id");
  return mysqli_affected_rows($conn);
}

// Membuat fungsi ubah
function change($data)
{
  global $conn;
  $id = $data["id"];
  $tempat_kp = htmlspecialchars($data["tempat_kp"]);
  $alamat_kp = htmlspecialchars($data["alamat_kp"]);
  $tanggal_mulai = htmlspecialchars($data["tanggal_mulai"]);
  $tanggal_selesai = htmlspecialchars($data["tanggal_selesai"]);
  $id_anggota = ($data["id_anggota"]);
  $id_dosen =  ($data["id_dosen"]);
  $id_perusahaan =  ($data["id_perusahaan"]);

  // $proposal = $data['proposal'];

  // if ($_FILES['proposal']['error'] === 4) {
  //     $proposal = $proposal;
  // } else {
  //     $proposal = upload_prop();
  // }
  $query = "UPDATE pendaftaran_kp SET tempat_kp = '$tempat_kp', alamat_kp = '$alamat_kp', tanggal_mulai = '$tanggal_mulai', tanggal_selesai = '$tanggal_selesai', id_anggota = '$id_anggota', id_dosen = '$id_dosen', id_perusahaan = '$id_perusahaan' WHERE id = $id";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function register($data)
{
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $secPassword = mysqli_real_escape_string($conn, $data["secPassword"]);

  $role = $data["role"];
  $result = mysqli_query($conn, "SELECT user WHERE username = $username");
  if (mysqli_fetch_assoc($result)) {
    echo "<script> alert ('username sudah ada'); </scipt>";
    return false;
  }
  if ($password !== $secPassword) {
    echo "<script> alert('Password tidak sama');</script>";
    return false;
  }

  $password = md5($password);
  mysqli_query($conn, "INSERT INTO user (id, username, password, id_role) VALUES('','$username','$password','$role')");
  return mysqli_affected_rows($conn);
}

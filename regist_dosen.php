<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <link rel="shortcut icon" href="poliwangi.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.2.0/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<?php
require('../web-kp/connection/db.php');

$Level = 1;
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
  $nik = ($_REQUEST['NIK']);
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$Username); 
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn,$Password);
	$nama = stripslashes($_REQUEST['nama']);
	$nama = mysqli_real_escape_string($conn,$nama);
        $query_user = "INSERT into `user` (id, username, password, id_role) 
		VALUES ('', '$nama', '$Username', md5('$Password'), '$Level')";
        $query_dosen = "INSERT INTO `dosen` (id, nama_dosen, nik, user_id) VALUES ('', '$Nama', '$nik', '')";
        $result = mysqli_query($conn,$query);
        if($result){
            echo "<div class='form'>
<h3>Registrasi Berhasil.</h3>
<br/>Klik disini untuk <a href='login.php'>Login</a></div>";
        }
    }else{
      require_once 'View/regist.php';
} 
?>
</body>
</html>
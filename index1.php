<?php
include 'connection/db.php';

error_reporting(0);

session_start();

if(isset($_SESSION['username'])) {
  header("Location: web-kp/berhasil.php");
}

if (isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if($result->num_rows > 0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    $_SESSION['id_role'] = $qry['id_role'];
    if($row['id_role']=="1"){
        header("location:dosen.php");
    }
    else if($row['id_role']=="2"){
        header("location:mahasiswa.php");
    }
  }else{
    echo "<script>alert('Username atau password salah')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/materialize.min.css">
  <title>Login | Poliwangi</title>
</head>
<body>
<div class="alert alert-warning" role="alert">
        <?php echo $_SESSION['error']?>
    </div>
  <div class="container">
    <!--  -->
      <h1>Sign in</h1>    
    <!--  -->
    <!-- Form Login -->
    <form class="col s12 action=" method="POST" action="">
      <div class="row">
        <div class="input-field col s12">
          <input id="username" type="text" name="username" value="<?php echo $username; ?>">
          <label for="username">Username</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="text" name="password" value="<?php echo $_POST['password']; ?>">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="button" name="submit">
          <button class="waves-effect waves-light btn col s12" name="submit">Sign in</button>
        </div>
      </div>
    </form>
    <!-- end Form login -->
  </div>

  <!-- Java script -->
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>


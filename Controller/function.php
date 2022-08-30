<?php

require "../connection/db.php";

function registDosen($data){
  global $conn;
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $secPassword = mysqli_real_escape_string($conn, $data["secPassword"]);

  $role = $data["role"];
  $result = mysqli_query($conn, "SELECT user WHERE username = $username");
  if(mysqli_fetch_assoc($result)){
    echo "<script> alert ('username sudah ada'); </scipt>";
    return false;
  }
  if($password !== $secPassword){
    echo "<script> alert('Password tidak sama');</script>";
    return false;
  }

  $password = md5($password);
  mysqli_query($conn, "INSERT INTO user (id, username, password, id_role) VALUES('','$username','$password','$role')");
  return mysqli_affected_rows($conn);
}

?>
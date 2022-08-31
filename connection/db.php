<?php
$server = "127.0.0.1:3306";
$user = "root";
$pass = "";
$database = "db_kp";


// global $conn;

$conn = new mysqli($server, $user, $pass, $database);

if ($conn->connect_error) {
  die("Connection error" . $conn->connection_error);
}
die;
// echo "Connected";

class koneksi
{


  public function connect()
  {

    $conn = new mysqli($server, $user, $pass, $database);

    return $conn;
  }
}

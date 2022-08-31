<?php
$server = "localhost";
$user = "root";
$pass = "";
$database="db_kp";
$port= "3306";

$conn = new mysqli($server, $user, $pass, $database, $port);

 if($conn -> connect_error) {
   die("Connection error" . $conn->connection_error);
 }
// echo "Connected";
?>
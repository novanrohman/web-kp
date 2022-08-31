<?php
require "function.php";
$id = $_GET['id'];
$sql = $conn->query("SELECT * FROM pendaftaran_kp WHERE id='$id'");
$result = $sql->fetch_assoc();
?>

<embed src="file/<?= $result['proposal']; ?>" type="application/pdf" width="100%" height="100%">
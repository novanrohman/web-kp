<?php
require "fungsi.php";
$id = $_GET['id'];
$sql = $conn->query("SELECT * FROM nilai WHERE id='$id'");
$result = $sql->fetch_assoc();
?>

<embed src="file/<?= $result['bukti_nilai_pembimbing_lapangan']; ?>" type="application/pdf" width="100%" height="100%">
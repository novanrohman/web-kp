<?php
//include verifikasi.php pada file Administrasi
include("../verifikasi.php");
?>
<html>
<head>
<title>view Detail</title>
</head>
<link rel="stylesheet" href="../style.css">
<body>
<div>
	<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
	<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="../index.php">Form Transaksi</a>
	<a href="../barang/input_barang.php">Form Barang</a>
</div>
<?php require "../koneksi.php"; ?>
<div align="center">
<table>
<h1>Tabel Transaksi Penjualan</h1>   
<tr>
	<th bgcolor="#ffc0cb">No</th>  
	<th bgcolor="#ffc0cb">Nama Barang</th>
	<th bgcolor="#ffc0cb">Harga Barang</th>
</tr>
<?php 
		// DESC (descending) / ASC (ascending)
		$query = mysqli_query($conn,"SELECT * FROM barang ORDER BY id_barang ASC");
		// menghitung jumlah data hasil dari fungsi mysqli_query
		if(mysqli_num_rows($query)){
		$id_barang = "1";
		// menampilkan data hasil dari fungsi mysqli_query
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $id_barang ?></td>
			<td><?php echo $data["nama_barang"];?></td>
            <td><?php echo $data["harga_barang"];?></td>
            <td><?php echo "<a href='edit_barang.php?id_barang=".$data['id_barang']."'> Edit</a>";?> | 
			<?php echo "<a href='delete_barang.php?id_barang=".$data['id_barang']."'> Delete</a>";?></td>
        </tr>
        <?php $id_barang++; } ?>
        <?php } ?>
</table>
</div>
<br>
<div align="center">
<a href="input_barang.php" > &lt;&lt; Kembali Ke Form Utama</a>
</div>
</body>  
</html>  

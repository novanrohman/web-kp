<?php 
//include verifikasi.php pada file Administrasi
include("../verifikasi.php");
require "../koneksi.php"; 
$query = mysqli_query($conn,"SELECT * FROM transaksi ORDER BY id DESC");
?>
<html>
<head>
<meta charset="utf-8">
<title>Form Transaksi</title>
<link rel="stylesheet" href="../style.css" />
</head>
<body>
<div>
<tr>Welcome <b><?php echo $_SESSION['username']; ?>!</b></tr>
<tr><div align="right"><a href="../logout.php">Logout</a></div></tr>
</div>
<div id="nav">
	<a href="../transaksi/index.php">Form Transaksi</a>
	<a href="barang/input_barang.php">Form Barang</a>
</div> 
<div align="center">
<table>
<h1>Tabel Transaksi Penjualan</h1>   
<tr>
	<th bgcolor="#ffc0cb">Id</th>  
	<th bgcolor="#ffc0cb">Nama Barang</th>
	<th bgcolor="#ffc0cb">Harga</th>
	<th bgcolor="#ffc0cb">Quantity</th> 
	<th bgcolor="#ffc0cb">Subtotal</th>
	<th bgcolor="#ffc0cb">Status</th>
	<th bgcolor="#ffc0cb">Diskon</th>
	<th bgcolor="#ffc0cb">Kota Kirim</th>
	<th bgcolor="#ffc0cb">Ongkos Kirim</th>
	<th bgcolor="#ffc0cb">Total Bayar</th>
	<th bgcolor="#ffc0cb">Aksi</th>
</tr>
<?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $id = "1";
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $id ?></td>
			<td><?php echo $data["nama_barang"];?></td>
            <td><?php echo $data["harga"];?></td>
            <td><?php echo $data["jumlah"];?></td>
			<td><?php echo $data["subtotal"];?></td>
            <td><?php echo $data["status"];?></td>
			<td><?php echo $data["diskon"];?></td>
			<td><?php echo $data["kota"];?></td>
			<td><?php echo $data["ongkos"];?></td>
            <td><?php echo $data["total"];?></td>
            <td><?php echo "<a href='edit.php?id=".$data['id']."'> Edit</a>";?> | <?php echo "<a href='delete.php?id=".$data['id']."'> Delete</a>";?></td>
        </tr>
        <?php $id++; } ?>
        <?php } ?>
</table>
</div>
<br>
<div align="center">
<a href="index.php" > &lt;&lt; Kembali Ke Form Utama</a>
</div>
</body>  
</html>  

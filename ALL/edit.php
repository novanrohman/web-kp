<?php 
include 'database.php';
$db = new database();
?>
<h3>Edit Data User</h3>
 
<form action="proses.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['idmhs']) as $d){
?>
<table>

    <tr>
		<td>NIM</td>
		<td>
            <input type="hidden" name="idmhs" value="<?php echo $d['idmhs'] ?>">   
            <input type="text" name="nim" value="<?php echo $d['nim'] ?>">
        </td>
	</tr>

	<tr>
		<td>Nama</td>
		<td>
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>

	<tr>
		<td>Kelas</td>
		<td>
            <input type="text" name="kelas" value="<?php echo $d['kelas'] ?>">
        </td>
	</tr>

    <tr>
		<td>Email</td>
		<td>
            <input type="text" name="email" value="<?php echo $d['email'] ?>">
        </td>
	</tr>

    <tr>
		<td>Alamat</td>
		<td>
            <input type="text" name="alamat" value="<?php echo $d['alamat'] ?>">
        </td>
	</tr>

	<tr>
		<td></td>
		<td>
			<input type="hidden" value="<?php  ?>">	
			<input type="submit" value="Simpan"></td>
		<!-- <input type="hidden" name="idmhs" value="<?php echo $d['idmhs'] ?>">   -->
		
		<!-- <form action="proses.php?aksi=update" method="post"> -->
		
	</tr>
</table>
<?php } ?>
</form>
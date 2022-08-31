<?php 
include 'database.php';
$db = new database();
?>
<h3>Data Mahasiswa</h3>
 
<a href="input.php">Input Data</a>
<table border="1">
        <tr>
            <th>No.</th>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>


	<?php

	$no = 1;
	foreach($db->tampil_data() as $x){
	?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $x['idmhs']; ?></td>
            <td><?php echo $x['nim']; ?></td>
            <td><?php echo $x['nama']; ?></td>
            <td><?php echo $x['kelas']; ?></td>
            <td><?php echo $x['email']; ?></td>
            <td><?php echo $x['alamat']; ?></td>
            <td>
                <a href="edit.php?idmhs=<?php echo $x['idmhs']; ?>&aksi=update">Edit</a>
                <a href="proses.php?idmhs=<?php echo $x['idmhs']; ?>&aksi=hapus" onclick="return confirm ('Hapus Data?'):" >Hapus</a>			
            </td>
        </tr>
	<?php 
	}
	?>
</table>
<?php
require 'fungsi.php';
$pendaftaran = query("SELECT * FROM pendaftaran_kp");

?>

<!-- untuk mengeluarkan data -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="container-fluid">
      <!-- <div class="row">
        <div class="col-md-12"> -->
      <div class="row my-2">
        <div class="col-md">
          <a href="tambah.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>
          <!-- <a href="export.php" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a> -->

          <div class="row my-2">
            <div class="col-md">
              <table class="table table-striped table-responsive table-hover text-center">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Tempat KP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Selesai</th>
                    <th scope="col">Proposal</th>
                    <th scope="col">Anggota Kelompok</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Perusahaan</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($pendaftaran as $row) : ?>
                    <tr class="isi">
                      <td class="data"><?= $i++; ?></td>
                      <td class="data"><?= $row["tempat_kp"]; ?></td>
                      <td class="data"><?= $row["alamat_kp"]; ?></td>
                      <td class="data"><?= $row["tanggal_mulai"]; ?></td>
                      <td class="data"><?= $row["tanggal_selesai"]; ?></td>
                      <td class="data"><?= $row["proposal"]; ?></td>
                      <td class="data"><?= $row["anggota_kelompok"]; ?></td>
                      <td class="data"><?= $row["nama_dosen"]; ?></td>
                      <td class="data"><?= $row["perusahaan_id"]; ?></td>
                      <td class="data-tombol">
                        <a href="editmahasiswa.php?id=<?= $row["id"]; ?>"><button class="update" name="submit"> Update</button> </a>
                        <a href="deletemahasiswa.php?id=<?= $row["id"]; ?>"><button class="delete" name="submit">delete</button></a>
                      </td>
                    </tr>
                </tbody>
              <?php endforeach; ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</section>
</div>
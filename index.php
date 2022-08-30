<?php

include("includes\header.php");
include("includes\bar.php");

require 'function.php';
$pendaftaran = query("SELECT * FROM pendaftaran_kp ORDER BY id DESC");

?>

<!-- untuk mengeluarkan data -->
<div class="content-wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="includes\img\poliwangi.png" alt="POLIWANGI" height="100" width="100">
    </div>
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
            <!-- <div class="row">
        <div class="col-md-12"> -->
            <div class="row my-2">
                <div class="col-md">
                    <a href="adddata.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Data</a>
                    <!-- <a href="export.php" target="_blank" class="btn btn-success ms-1"><i class="bi bi-file-earmark-spreadsheet-fill"></i>&nbsp;Ekspor ke Excel</a> -->

                    <div class="row my-2">
                        <div class="col-md">
                            <table class="table table-striped table-responsive table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Tempat KP</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Mulai</th>
                                        <th>Tanggal Selesai</th>
                                        <th>Proposal</th>
                                        <th>Anggota Kelompok</th>
                                        <th>Dosen</th>
                                        <th>Perusahaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM pendaftaran_kp
                                            INNER JOIN anggota_kelompok ON pendaftaran_kp.id_anggota = anggota_kelompok.id_anggota
                                            INNER JOIN dosen ON pendaftaran_kp.id_dosen = dosen.id_dosen
                                            INNER JOIN perusahaan ON pendaftaran_kp.id_perusahaan = perusahaan.id_perusahaan
                                            ";
                                    $sql1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    while ($data = mysqli_fetch_array($sql1)) { ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['tempat_kp'] ?></td>
                                            <td><?= $data['alamat_kp'] ?></td>
                                            <td><?= $data['tanggal_mulai'] ?></td>
                                            <td><?= $data['tanggal_selesai'] ?></td>
                                            <td><?= $data['proposal'] ?></td>
                                            <td><?= $data['nama_anggota'] ?></td>
                                            <td><?= $data['nama_dosen'] ?></td>
                                            <td><?= $data['nama_perusahaan'] ?></td>
                                            <td>
                                                <a href="detail.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Detail</a> |
                                                <a href="change.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Ubah</a> |
                                                <a href="del.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $data['nama_anggota']; ?> ?');"><i class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php
include("includes/scripts.php");
include("includes/footer.php");

?>
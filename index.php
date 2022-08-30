<?php
include ('includes/header.php');
include ('includes/navbar.php');

// Memanggil atau membutuhkan file function.php
require 'fungsi.php';

// Menampilkan semua data dari table siswa berdasarkan nis secara Descending
$nilai = query("SELECT * FROM nilai ORDER BY id DESC");
?>

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="text-center fw-bold text-uppercase">Nilai Kerja Praktek</h3>
                <hr>
            </div>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <a href="create.php" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Tamah Nilai</a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md">
                <table id="data" class="table table-striped table-responsive table-hover text-center" style="width:100%">
                    <thead class="table-dark">
                        <tr>
                            <th>No.</th>
                            <th>Nilai Pembimbing Lapangan</th>
                            <th>Nilai Pembimbing Kp</th>
                            <th>Nilai Penguji</th>
                            <th>Bukti Nilai Pembimbing Lapangan</th>
                            <th>Pendaftaran Ujian Kp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($nilai as $data) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['nilai_pembimbing_lapangan']; ?></td>
                                <td><?= $data['nilai_pembimbing_kp']; ?></td>
                                <td><?= $data['nilai_penguji']; ?></td>
                                <td><?= $data['bukti_nilai_pembimbing_lapangan']; ?></td>
                                <td><?= $data['pendaftaran_ujian_kp_id']; ?></td>
                                <td>
                                    <button class="btn btn-success btn-sm text-white detail" data-id="<?= $data['id']; ?>" style="font-weight: 600;"><i class="bi bi-info-circle-fill"></i>&nbsp;Detail</button> |

                                    <a href="update.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="bi bi-pencil-square"></i>&nbsp;Ubah</a> |

                                    <a href="hapus.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $data['nilai_pembimbing_lapangan']; ?> ?');"><i class="bi bi-trash-fill"></i>&nbsp;Hapus</a>
                                </td>
                            </tr>
                         <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php
    include ('includes/script.php');
    include ('includes/footer.php');
    ?>
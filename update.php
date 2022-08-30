<?php

include ('includes/header.php');
include ('includes/navbar.php');
// Memanggil atau membutuhkan file function.php
require 'fungsi.php';

// Mengambil data dari nis dengan fungsi get
$id = $_GET['id'];

// Mengambil data dari table siswa dari nis yang tidak sama dengan 0
$nilai = query("SELECT * FROM nilai WHERE id = $id")[0];

// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data nilai mahasiswa berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data nilai mahasiswa gagal diubah!');
            </script>";
    }
}


?>

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-pencil-square"></i>&nbsp;Ubah Nilai</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $nilai['id']; ?>">
                    <div class="mb-3">
                        <label for="nilai_pembimbing_lapangan" class="form-label">Nilai Pembimbing Lapangan</label>
                        <input type="text" class="form-control w-50" id="nilai_pembimbing_lapangan" placeholder="Masukkan Nilai" name="nilai_pembimbing_lapangan" value="<?= $nilai['nilai_pembimbing_lapangan']; ?>" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_pembimbing_kp" class="form-label">Nilai Pembimbing Kp</label>
                        <input type="text" class="form-control form-control-md w-50" id="nilai_pembimbing_kp" placeholder="Masukkan Nilai" name="nilai_pembimbing_kp" alue="<?= $nilai['nilai_pembimbing_kp']; ?>" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_penguji" class="form-label">Nilai Penguji</label>
                        <input type="text" class="form-control w-50" id="nilai_penguji" placeholder="Masukkan Nilai" name="nilai_penguji" alue="<?= $nilai['nilai_penguji']; ?>" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_nilai_pembimbing_lapangan" class="form-label">Bukti Nilai Pembimbing Lapangan</label>
                        <input type="file" class="form-control w-50" id="bukti_nilai_pembimbing_lapangan" name="bukti_nilai_pembimbing_lapangan" alue="<?= $nilai['bukti_nilai_pembimbing_lapangan']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendaftaran_ujian_kp_id" class="form-label">Pendaftaran Ujian Kp</label>
                        <input type="text" class="form-control w-50" id="pendaftaran_ujian_kp_id" name="pendaftaran_ujian_kp_id" alue="<?= $nilai['pendaftaran_ujian_kp_id']; ?>"
                    </div>
                    <hr>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->

    <?php
    include ('includes/script.php');
    include ('includes/footer.php');
    ?>
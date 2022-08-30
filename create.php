<?php
include ('includes/header.php');
include ('includes/navbar.php');

// Memanggil atau membutuhkan file function.php
require 'fungsi.php';

// Jika fungsi tambah lebih dari 0/data tersimpan, maka munculkan alert dibawah
if (isset($_POST['simpan'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data nilai mahasiswa berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi tambah dari 0/data tidak tersimpan, maka munculkan alert dibawah
        echo "<script>
                alert('Data siswa gagal ditambahkan!');
            </script>";
    }
}

?>

    <!-- Container -->
    <div class="container">
        <div class="row my-2">
            <div class="col-md">
                <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Tambah Nilai KP</h3>
            </div>
            <hr>
        </div>
        <div class="row my-2">
            <div class="col-md">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nilai_pembimbing_lapangan" class="form-label">Nilai Pembimbing Lapangan</label>
                        <input type="text" class="form-control w-50" id="nilai_pembimbing_lapangan" placeholder="Masukkan Nilai" name="nilai_pembimbing_lapangan" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_pembimbing_kp" class="form-label">Nilai Pembimbing Kp</label>
                        <input type="text" class="form-control form-control-md w-50" id="nilai_pembimbing_kp" placeholder="Masukkan Nilai" name="nilai_pembimbing_kp" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="nilai_penguji" class="form-label">Nilai Penguji</label>
                        <input type="text" class="form-control w-50" id="nilai_penguji" placeholder="Masukkan Nilai" name="nilai_penguji" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="bukti_nilai_pembimbing_lapangan" class="form-label">Bukti Nilai Pembimbing Lapangan</label>
                        <input type="file" class="form-control w-50" id="bukti_nilai_pembimbing_lapangan" name="bukti_nilai_pembimbing_lapangan" required>
                    </div>
                    <div class="mb-3">
                        <label for="pendaftaran_ujian_kp_id" class="form-label">Pendaftaran Ujian Kp</label>
                        <input type="text" class="form-control w-50" id="pendaftaran_ujian_kp_id" name="pendaftaran_ujian_kp_id" required>
                    </div>

                    <!-- <div class="mb-3">
                        <label>Pendaftaran Ujian Kp</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jekel" id="Laki - Laki" value="Laki - Laki">
                            <label class="form-check-label" for="Laki - Laki">Laki - Laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jekel" id="Perempuan" value="Perempuan">
                            <label class="form-check-label" for="Perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select w-50" id="jurusan" name="jurusan">
                            <option disabled selected value>--------------------------------------------Pilih Jurusan--------------------------------------------</option>
                            <option value="Teknik Jaringan Akses">Teknik Jaringan Akses</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Multimedia">Multimedia</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Mail</label>
                        <input type="email" class="form-control w-50" id="email" placeholder="Masukkan E-Mail" name="email" autocomplete="off" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <input class="form-control form-control-sm w-50" id="gambar" name="gambar" type="file">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control w-50" id="alamat" rows="5" name="alamat" placeholder="Masukkan Alamat" autocomplete="off" required></textarea>
                    </div> -->

                    <hr>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Close Container -->


    <?php
    include ('includes/script.php');
    include ('includes/footer.php');
    ?>
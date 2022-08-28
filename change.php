<?php

include("includes\header.php");
include("includes\bar.php");
// Memanggil atau membutuhkan file function.php
require 'function.php';

$mahasiswa = query("SELECT * FROM anggota_kelompok");
$dosen = query("SELECT * FROM dosen");
$perusahaan = query("SELECT * FROM perusahaan");
// Mengambil data dari nis dengan fungsi get
$id = $_GET['id'];

// Mengambil data dari table siswa dari nis yang tidak sama dengan 0
$pendaftaran = query("SELECT * FROM pendaftaran_kp WHERE id = $id")[0];

// Jika fungsi ubah lebih dari 0/data terubah, maka munculkan alert dibawah
if (isset($_POST['ubah'])) {
    if (change($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    } else {
        // Jika fungsi ubah dibawah dari 0/data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data gagal diubah!');
            </script>";
    }
}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="row my-2">
                        <div class="col-md">
                            <h3 class="fw-bold text-uppercase"><i class="bi bi-person-plus-fill"></i>&nbsp;Ubah Data</h3>
                        </div>
                        <hr>
                    </div>

                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $pendaftaran['id']; ?>">
                        <div class="form-group row">
                            <label for="Tempat" class="col-sm-2 col-form-label">Tempat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Tempat" placeholder="Tempat KP" name="tempat_kp" value="<?= $pendaftaran['tempat_kp']; ?>" name="tempat_kp" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="Alamat" placeholder="Alamat" name="alamat_kp" value="<?= $pendaftaran['alamat_kp']; ?>" name="alamat_kp" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tanggal Mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="Tanggal Mulai" placeholder="Tanggal Mulai" name="tanggal_mulai" value="<?= $pendaftaran['tanggal_mulai']; ?>" name="tanggal_mulai" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Tanggal Selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="Tanggal Selesai" placeholder="Tanggal Selesai" name="tanggal_selesai" value="<?= $pendaftaran['tanggal_selesai']; ?>" name="tanggal_selesai" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Proposal" class="col-sm-2 col-form-label">Proposal</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="Proposal" placeholder="Proposal" name="proposal" value="<?= $pendaftaran['proposal']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Anggota Mahasiswa" class="col-sm-2 col-form-label">Anggota Mahasiswa</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_anggota">
                                    <option value="">Pilih Mahasiswa</option>
                                    <?php foreach ($mahasiswa as $mhs) : ?>
                                        <option value="<?= $mhs['id_anggota'] ?>"><?= $mhs['nama_anggota'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Dosen Pengampu" class="col-sm-2 col-form-label">Dosen Pengampu</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_dosen">
                                    <option value="">Pilih Dosen</option>
                                    <?php foreach ($dosen as $dns) : ?>
                                        <option value="<?= $dns['id_dosen'] ?>"><?= $dns['nama_dosen'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Perusahaan" class="col-sm-2 col-form-label">Perusahaan</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_perusahaan">
                                    <option value="">Pilih Perusahaan</option>
                                    <?php foreach ($perusahaan as $psh) : ?>
                                        <option value="<?= $psh['id_perusahaan'] ?>"><?= $psh['nama_perusahaan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <a href="index.php" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-warning" name="ubah">Ubah</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>

<?php
include("includes/scripts.php");
include("includes/footer.php");

?>
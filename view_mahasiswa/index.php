<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}
include("includes\header.php");
include("includes\bar.php");
include("../connection/db.php");


require '..\Controller\function.php';
$pendaftaran = mysqli_query($conn, "SELECT * FROM pendaftaran_kp ORDER BY id DESC");

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
                                    <?php
                                    $no = 1;
                                    $query = "SELECT * FROM pendaftaran_kp
                                            INNER JOIN anggota_kelompok ON pendaftaran_kp.id_anggota = anggota_kelompok.id_anggota
                                            INNER JOIN dosen ON pendaftaran_kp.id_dosen = dosen.id_dosen
                                            INNER JOIN perusahaan ON pendaftaran_kp.id_perusahaan = perusahaan.id_perusahaan
                                            ";
                                    $sql1 = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                    while ($data = mysqli_fetch_array($sql1)) { 
                                        
                                        var_dump($pendaftaran)?>
                                        <tr>
                                            <td scope="row"><?= $no++ ?></td>
                                            <td scope="row"><?= $data['tempat_kp'] ?></td>
                                            <td scope="row"><?= $data['alamat_kp'] ?></td>
                                            <td scope="row"><?= $data['tanggal_mulai'] ?></td>
                                            <td scope="row"><?= $data['tanggal_selesai'] ?></td>
                                            <td scope="row"><?= $data['proposal'] ?></td>
                                            <td scope="row"><?= $data['nama_anggota'] ?></td>
                                            <td scope="row"><?= $data['nama_dosen'] ?></td>
                                            <td scope="row"><?= $data['nama_perusahaan'] ?></td>
                                            <td scope="row">
                                                <a href="detail.php?id=<?= $data['id']; ?>" class="btn btn-success btn-sm" style="font-weight: 600;"><i class="fa-solid fa-circle-info"></i>&nbsp;Detail</a>
                                                <a href="change.php?id=<?= $data['id']; ?>" class="btn btn-warning btn-sm" style="font-weight: 600;"><i class="fa-solid fa-square-pen"></i></i>&nbsp;Change</a>
                                                <a href="del.php?id=<?= $data['id']; ?>" class="btn btn-danger btn-sm" style="font-weight: 600;" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $data['nama_anggota']; ?> ?');"><i class="fa-solid fa-trash"></i>&nbsp;Delete</a>
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
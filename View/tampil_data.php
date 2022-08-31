<?php
include('../connection/db.php');
// include('index.php');
if (isset($_GET['nim'])) {
    $nim   = $_GET['nim'];
} else {
    die("Error. No ID Selected!");
}
//query
$q1 = "SELECT * FROM mahasiswa JOIN anggota_kelompok ON mahasiswa.`anggota_kelompok_id`=anggota_kelompok.`id_anggota` JOIN pendaftaran_kp ON pendaftaran_kp.`anggota_kelompok`=anggota_kelompok.`id_anggota`";

$result = mysqli_query($conn, $q1);
?>

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                form start
                <form action="../controler/add.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ketua Kelompok</label>
                            <input type="text" class="form-control" name="nama" placeholder="Enter nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIM</label>
                            <input type="text" class="form-control" name="nim" placeholder="Enter NIM">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kelas</label>
                            <input type="text" class="form-control" name="kelas" placeholder="Enter kelas">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Enter alamat">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
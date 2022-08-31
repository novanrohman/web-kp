<?php
include('../connection/db.php');

//  query
$q1 = "SELECT * FROM mahasiswa JOIN anggota_kelompok ON mahasiswa.`anggota_kelompok_id`=anggota_kelompok.`id_anggota`
JOIN pendaftaran_kp ON pendaftaran_kp.`anggota_kelompok`=anggota_kelompok.`id_anggota`";

$result = mysqli_query($conn, $q1);
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Mahasiswa</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- TABLE: LATEST ORDERS -->
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Ketua Kelompok KP</th>
                            <th>Tempat KP</th>
                            <th>Status KP</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($data = mysqli_fetch_array($result)) {
                            $status_kp = $data['status_kp'];
                        ?>
                            <tr>
                                <td><a href="index.php?page=<?=$data['nim']?>"><?php echo $data['nim']; ?></a></td>
                                <td><?php echo $data['nama_anggota'] ?></td>
                                <td><?php echo $data['tempat_kp'] ?></td>
                            <?php
                            if ($data['status_kp'] == "1") {
                                echo "<td><span class='badge bg-success'>Diterima</span></td>";
                            } else if ($data['status_kp'] == "2") {
                                echo "<td><span class='badge bg-warning'>Proses</span></td>";
                            } else if ($data['status_kp'] == "3") {
                                echo "<td><span class='badge bg-danger'>Ditolak</span></td>";
                            }
                            echo 
                            "<td>
                            <button type='button' class='btn btn-warning' data-toggle='modal' data-target='#modal-default'>
                            edit
                            </button>
                        </td>";

                        
                        }
                            ?>
                        <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                        
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>





<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>
</div>
<!-- ./wrapper -->
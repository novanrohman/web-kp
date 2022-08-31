<?php
include('../connection/db.php');
//query
$sql = "SELECT * FROM mahasiswa JOIN anggota_kelompok ON mahasiswa.`anggota_kelompok_id`=anggota_kelompok.`id_anggota` JOIN pendaftaran_kp ON pendaftaran_kp.`anggota_kelompok`=anggota_kelompok.`id_anggota`
JOIN pendaftaran_ujian_kp ON pendaftaran_ujian_kp.`pendaftaran_kp_id` = pendaftaran_kp.`id_pendaftaran_kp` GROUP BY (nama_mahasiswa)";
 
$result=mysqli_query($conn, $sql);
?>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Data Mahasiswa Kerja Praktek </h3> -->

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Ketua Kelompok KP</th>
                                        <th>Tanggal Pengajuan KP</th>
                                        <th>Status KP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                       $no = 1;
                       while ($data = mysqli_fetch_array($result)) { 
                        $status_kp=$data['status_kp'];
                        $tgl_ujian=$data['id_pendaftaran_kp'];
                        
                         echo " <tr>";
                          echo "<td>".$no++."</td>";
                          echo "<td>".$data['nama_mahasiswa']."</td>";

                          // var_dump($data['nama_mahasiswa']);
                          echo "<td>".$data['tanggal_mulai']."</td>";
                          
                          if($data['status_kp']=="1"){
                            echo"<td><span class='badge bg-success'>Diterima</span></td>";
                          }
                          else if($data['status_kp']=="2"){
                            echo"<td><span class='badge bg-warning'>Proses</span></td>";
                          }
                          else if($data['status_kp']=="3"){
                            echo"<td><span class='badge bg-danger'>Ditolak</span></td>";
                          }

                         
                          // $data['status_kp'].
                          // echo "<td>".$data['email']."</td>";
                          // echo "<td>".$data['jadwal_ujian']."</td>";
                          // echo "<td>".$data['acc_ujian']."</td>";
                          // echo "<td>".$data['anggota_kelompok_id']."</td>";
                       }
                       ?>
                                    </tr>
                                    <!-- <tr>
                        <td>1</td>
                        <td>Mohamad Aji Hermanysa</td>
                        <td>28-8-2022</td>
                        <td><span class="badge bg-success">Diterima</span></td>
                        <td>30-9-2022</td>
                        <td>lulus</td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Putri Indira Puspitasari</td>
                        <td>28-8-2022</td>
                        <td><span class="badge bg-warning">Proses</span></td>
                        <td>30-9-2022</td>
                        <td>lulus</td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>Nobita</td>
                        <td>28-8-2022</td>
                        <td><span class="badge bg-danger">Ditolak</span></td>
                        <td>30-9-2022</td>
                        <td>lulus</td>
                      </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php
      include "footer.html";
    ?>
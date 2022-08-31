<!-- <?php
        include('../connection/db.php');

        //  query
        $q1 = "SELECT * FROM mahasiswa JOIN anggota_kelompok ON mahasiswa.`anggota_kelompok_id`=anggota_kelompok.`id_anggota`
JOIN pendaftaran_kp ON pendaftaran_kp.`anggota_kelompok`=anggota_kelompok.`id_anggota`";

        $result = mysqli_query($conn, $q1);
        // Fetch all users data from database
        //$result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY id DESC");
        ?> -->

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
                            <h3 class="card-title">Data Mahasiswa</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

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
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NIM</th>
                                        <th>Kelas</th>
                                        <th>Alamat</th>
                                        <th>User Id</th>
                                        <th>Anggota Kelompok</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // while($user_data = mysqli_fetch_array($result)) {   
                                    $no = 1;
                                    foreach ($db->tampil_data() as $user_data) {

                                        echo "<tr>";
                                        echo "<td>" . $no++ . "</td>";
                                        echo "<td>" . $user_data['nama_mahasiswa'] . "</td>";
                                        echo "<td>" . $user_data['nim'] . "</td>";
                                        echo "<td>" . $user_data['kelas'] . "</td>";
                                        echo "<td>" . $user_data['alamat'] . "</td>";
                                        echo "<td>" . $user_data['email'] . "</td>";
                                        echo "<td>" . $user_data['anggota_kelompok_id'] . "</td>";
                                        echo "<td><button type='button' class='btn btn-outline-primary'>
        <span class='material-symbols-outlined'>Edit</span>
      </button>  <button type='button' class='btn btn-outline-danger'>
      <span class='material-symbols-outlined'>delete</span>
    </button>
  </td></tr>";
                                    }
                                    // }
                                    ?>


                                    </tr>
                                    <tr>
                                    </tr>
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
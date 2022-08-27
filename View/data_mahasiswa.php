<!-- <?php

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
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#modal-default">
                                Tambah Data
                            </button>

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
                                <table class="table table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Kelas</th>
                                            <th>Email</th>
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
      foreach($db->tampil_data() as $user_data){
              
        echo "<tr>";
        echo "<td>".$no++."</td>";    
        echo "<td>".$user_data['nama_mahasiswa']."</td>";
        echo "<td>".$user_data['nim']."</td>";    
        echo "<td>".$user_data['kelas']."</td>"; 
        echo "<td>".$user_data['email']."</td>"; 
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['user_id']."</td>";        
        echo "<td>".$user_data['anggota_kelompok_id']."</td>";    
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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- form start -->
                <form action="../controler/add.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
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
                        <!-- <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div> -->
                        <!-- <div class="form-group">
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
                        </div> -->
                        <!-- <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> -->
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
<?php
include '../connection/db.php';

$id = $_SESSION['id'];
$sql = "SELECT * FROM dosen WHERE user_id = '$id'";
$result = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($result)){
?>

<?php
// --- Fungsi Ubah Data (Update)
// function ubah($koneksi){
//   // ubah data
//   if(isset($_POST['update'])){
//       $id = $_POST['id'];
//       $username = $_POST['username'];
//       $hasil = $_POST['nama_dosen'];
//       $lama = $_POST['nik'];
//       $tgl_panen = $_POST['tgl_panen'];
      
//       if(!empty($nm_tanaman) && !empty($hasil) && !empty($lama) && !empty($tgl_panen)){
//           $perubahan = "nama_tanaman='".$nm_tanaman."',hasil_panen=".$hasil.",lama_tanam=".$lama.",tanggal_panen='".$tgl_panen."'";
//           $sql_update = "UPDATE dosen, user";

//           $update = mysqli_query($koneksi, $sql_update);
//           if($update && isset($_GET['aksi'])){
//               if($_GET['aksi'] == 'update'){
//                   header('location: index.php');
//               }
//           }
//       } else {
//           $pesan = "Data tidak lengkap!";
//       }
//   }
  
//   // tampilkan form ubah
//   if(isset($_GET['id'])){
      ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-body">
              <form class="form-horizontal" action="post">
                      <div class="form-group row">
                        <!-- <label for="inputName" class="col-sm-2 col-form-label">ID</label> -->
                        <!-- <div class="col-sm-10"> -->
                          <input type="hidden" class="form-control" id="inputName" value="<?php echo $id?>">
                        <!-- </div> -->
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" value="<?php echo $_SESSION['username']; ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName1" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Nama" value="<?php echo $data['nama_dosen']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="NIK" value="<?php echo $data['nik']?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputName2" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Retype-Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputName2" placeholder="Retype-Password">
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
                          <button type="submit" class="btn btn-danger">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>
    </div>
  </section>
</div>
<?php 
}
?>
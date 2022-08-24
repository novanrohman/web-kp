<?php
require "fungsi.php";
$mahasiswa = query("SELECT * FROM anggota_kelompok");
$dosen = query("SELECT * FROM dosen");
$perusahaan = query("SELECT * FROM perusahaan");
if (isset($_POST["submit"])) {
  if (daftar_kp($_POST) > 0) {
    echo "<script>
          alert ('data berhasil ditambah');
          document.location .href = 'kp.php'
      </script>";
  } else {
    echo "<script>
          alert ('data gagal ditambah');
          document.location.href = 'kp.php'
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
          <div class="card">
            <div class="card-body">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <label for="Tempat" class="col-sm-2 col-form-label">Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Tempat" placeholder="Tempat KP" name="tempat_kp">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="Alamat" placeholder="Alamat" name="alamat_kp">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Tanggal Mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Tanggal Mulai" placeholder="Tanggal Mulai" name="tanggal_mulai">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Tanggal Selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="Tanggal Selesai" placeholder="Tanggal Selesai" name="tanggal_selesai">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Proposal" class="col-sm-2 col-form-label">Proposal</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="Proposal" placeholder="Proposal" name="proposal">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Anggota Mahasiswa" class="col-sm-2 col-form-label">Anggota Mahasiswa</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="anggota_kelompok">
                      <option value="">Pilih Mahasiswa</option>
                      <?php foreach ($mahasiswa as $mhs) : ?>
                        <option value="<?= $mhs['id'] ?>"><?= $mhs['nama_anggota'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Dosen Pengampu" class="col-sm-2 col-form-label">Dosen Pengampu</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="dosen_id">
                      <option value="">Pilih Dosen</option>
                      <?php foreach ($dosen as $dns) : ?>
                        <option value="<?= $dns['id'] ?>"><?= $dns['nama_dosen'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Perusahaan" class="col-sm-2 col-form-label">Perusahaan</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="perusahaan_id">
                      <option value="">Pilih Perusahaan</option>
                      <?php foreach ($perusahaan as $psh) : ?>
                        <option value="<?= $psh['id'] ?>"><?= $psh['nama_perusahaan'] ?></option>
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
                    <button type="submit" class="btn btn-danger" name="submit">Submit</button>
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
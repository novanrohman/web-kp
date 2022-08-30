<!-- /.row -->
<?php
include("includes\header.php");
include("includes\bar.php");
require "fungsi.php";
$id = $_GET["id"];

$mhk = query("SELECT lembar_kerja.id, file, tanggal,anggota_kelompok_id, nama_anggota FROM lembar_kerja INNER JOIN anggota_kelompok ON lembar_kerja.anggota_kelompok_id = anggota_kelompok.id")[0];


if (isset($_POST["submit"])) {

  if (ubah($_POST) > 0) {
    echo "<script>
        alert ('data berhasil diubah!');
        document.location .href = 'kp.php'
    </script>";
  } else {
    echo "<script>
        alert ('data gagal diubah!');
        document.location.href = 'kp.php'
    </script>";
  }
}
$mhasiswa = query("SELECT * FROM anggota_kelompok");
?>


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" required value="<?= $mhk["id"]; ?>" />
            <input type="hidden" name="file_lama" id="id" required value="<?= $mhk["file"]; ?>" />
            <div class="col-md-12">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Formulir <small><em>Perubahan surat</em> Praktik kerja mahasiswa </small></h3>
                </div>
                <div class="card-body">
                  <div id="actions" class="row">
                    <div class="col-lg-5 d-flex align-items-center ">
                      <div class="btn-group w-100">
                        <!-- <input type="file" class="file-input" name="file" id="file"> -->
                        <select name="anggota_kelompok_id" id="" class="btn btn-primary col start" required value="<?php $mhk["anggota_kelompok_id"]; ?>">
                          <option value="">Ubah Mahasiswa</option>
                          <?php foreach ($mhasiswa as $mhs) : ?>
                            <option value=<?= $mhs['id'] ?>><?= $mhs['nama_anggota'] ?></option>
                          <?php endforeach; ?>
                        </select>
                        <!-- <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header"> -->
                        <!-- <span>Start upload</span> -->


                        </input>
                      </div>
                    </div>

                    <!-- <div class="col-lg-6 d-flex align-items-center">
                    <div class="fileupload-process w-100">
                      <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                    </div>
                  </div> -->
                    <!-- <button data-dz-remove class="btn btn-danger delete mr-1" name="">
                        <i class="fas fa-trash"></i>
                        <span>Delete</span>
                      </button>
                      <button data-dz-remove class="btn btn-warning cancel " name="submit">
                        <i class="fas fa fa-send"></i>
                        <span>Send</span>
                      </button> -->

                    <div class="col-md-5">
                      <div class="card card-default">


                      </div>
                      <div class="card-body ">
                        <div id="actions" class="row">
                          <div class="col-lg-8 d-flex align-items-center ">
                            <div class="btn-group w-100">
                              <!-- <input type="file" class="file-input" name="file" id="file"> -->
                              <input type="date" class="btn btn-primary col start" name="tanggal" required value="<?php $mhk["tanggal"]; ?>">
                              <!-- <i class="fas fa-upload"></i> -->
                              <!-- <span>Start upload</span> -->
                              </input>
                            </div>
                          </div>
                        </div>

                        <div class="table table-striped files" id="previews">
                          <div id="template" class="row mt-2">
                            <div class="col-auto">
                              <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                            </div>
                            <div class="col d-flex align-items-center">
                              <p class="mb-0">
                                <span class="lead" data-dz-name></span>
                                <span data-dz-size></span>
                              </p>
                              <strong class="error text-danger" data-dz-errormessage></strong>
                            </div>
                            <div class="col-auto d-flex align-items-center">
                              <div class="btn-group">

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>




                </div>
                <div class="card-header">

                </div>
                <div class="card-body">
                  <div id="actions" class="row">
                    <div class="col-lg-9 d-flex align-items-center">
                      <div class="btn-group w-100">
                        <!-- <input type="file" class="file-input" name="file" id="file"> -->
                        <input type="file" class="btn btn-primary col start" name="file" required value="<?php $mhk["file"]; ?>">
                        <!-- <i class="fas fa-upload"></i> -->
                        <!-- <span>Start upload</span> -->
                        </input>
                      </div>
                    </div>

                    <button data-dz-remove class="btn btn-warning cancel " name="submit">
                      <i class="fas fa fa-send"></i>
                      <span>Ubah Data</span>
                    </button>
                  </div>

                  <div class="table table-striped files" id="previews">
                    <div id="template" class="row mt-2">
                      <div class="col-auto">
                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                      </div>
                      <div class="col d-flex align-items-center">
                        <p class="mb-0">
                          <span class="lead" data-dz-name></span>
                          <span data-dz-size></span>
                        </p>
                        <strong class="error text-danger" data-dz-errormessage></strong>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                        <div class="btn-group">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="table table-striped files" id="previews">
              <div id="template" class="row mt-2">
                <div class="col-auto">
                  <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                </div>
                <div class="col d-flex align-items-center">
                  <p class="mb-0">
                    <span class="lead" data-dz-name></span>
                    <span data-dz-size></span>
                  </p>
                  <strong class="error text-danger" data-dz-errormessage></strong>
                </div>
                <div class="col-auto d-flex align-items-center">
                  <div class="btn-group">

                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
  </section>
</div>



<!-- <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Upload file <small><em>File Upload</em> like look</small></h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-lg-9 d-flex align-items-center">
                    <div class="btn-group w-100">
                      <input type="file" class="file-input" name="file" id="file"> -->
<!-- <input type="file" class="btn btn-primary col start" name="file" required> -->
<!-- <i class="fas fa-upload"></i> -->
<!-- <span>Start upload</span> -->
<!-- </input>
                    </div>
                  </div> -->

<!-- <button data-dz-remove class="btn btn-warning cancel " name="submit">
                        <i class="fas fa fa-send"></i>
                        <span>Send</span>
                      </button>
                </div>
                
                <div class="table table-striped files" id="previews">
                  <div id="template" class="row mt-2">
                    <div class="col-auto">
                        <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                    </div>
                    <div class="col d-flex align-items-center">
                        <p class="mb-0">
                          <span class="lead" data-dz-name></span>
                          <span data-dz-size></span>
                        </p>
                        <strong class="error text-danger" data-dz-errormessage></strong>
                    </div>
                    <div class="col-auto d-flex align-items-center">
                      <div class="btn-group">
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>  -->



</form>
<?php

include("includes\scripts.php");
include("includes\bawah.php");

?>
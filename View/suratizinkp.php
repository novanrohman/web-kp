<!-- /.row -->
<?php
require "fungsi.php";
if (isset($_POST["submit"])){
  if (surat_ijin($_POST)>0){
    echo "<script>
        alert ('data berhasil ditambah');
        document.location .href = 'kp.php'
    </script>" ;
    
}
else {
    echo "<script>
        alert ('data gagal ditambahkan');
        document.location.href = 'kp.php'
    </script>";
}
}
?>
<form action="" method="post" enctype="multipart/form-data">
 <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Upload file <small><em>File Upload</em> like look</small></h3>
              </div>
              <div class="card-body">
                <div id="actions" class="row">
                  <div class="col-lg-3">
                    <div class="btn-group w-100">
                      <!-- <input type="file" class="file-input" name="file" id="file"> -->
                      <input type="file" class="btn btn-primary col start" name="file">
                        <!-- <i class="fas fa-upload"></i> -->
                        <!-- <span>Start upload</span> -->
                      </input>
                    </div>
                  </div>
                  
                  <div class="col-lg-6 d-flex align-items-center">
                    <div class="fileupload-process w-100">
                      <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                        <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                      </div>
                    </div>
                  </div>
                      <button data-dz-remove class="btn btn-danger delete mr-1" name="">
                        <i class="fas fa-trash"></i>
                        <span>Delete</span>
                      </button>
                      <button data-dz-remove class="btn btn-warning cancel " name="submit">
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
             
</form>
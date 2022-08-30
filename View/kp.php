

      <!-- Main -->
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
        <?php
        if(isset($_GET['page'])){
          $page = $_GET['page'];


          switch ($page) {
            case 'tampilan':
            include "tampilan.php";
            break;

            case 'data_mahasiswa':
            include "data_mahasiswa.php";
            break;

            case 'ubah':
            include "ubah.php";
            break;

            case 'ubah':
            include "ubah.php";
            break;
            
            case 'suratizinkp':
            include "suratizinkp.php";
            break;

            default:
            include "dashboard_dosen.php";
            break;

          }
        } else {
          include "404.php";
        }
        ?>
        </div>
      </section>
      </div>
      <!-- ./Main -->





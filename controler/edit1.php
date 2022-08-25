<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="witdh=device-width, initial-scale=1.0">
    <!-- <h1>Setting Data Mahasiswa</h1> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
    .mx-auto {
        width: 800px
    }

    .card {
        margin-top: 10px
    }
    </style>
</head>

<body>
    <!-- <h2 class="text-center">Edit Data Mahasiswa</h2>
    <h3 class="text-center">POLIWANGI-Teknik Rekayasa Perangkat Lunak</h3> -->

    <div class="max-auto">
        <!-- masukkan data -->
        <div class="card">
            <h5 class="card-header">Edit Data</h5>
            <div class="card-body">
                <?php
                if($error){
                ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error ?>
                </div>
                <?php
                }
                ?>

                <?php
                if($sukses){
                ?>
                <div class="alert alert-sukses" role="alert">
                    <?php echo $sukses ?>
                </div>
                <?php
                }
                ?>
                <form action=" " method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">NAMA</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="nim">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="kelas" class="col-sm-2 col-form-label">KELAS</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="kelas">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">EMAIL</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="staticEmail" name="email"
                                placeholder="nama@gmail.com">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                        <div class="col-sm-10">
                            <input type="text-area" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="user_id" class="col-sm-2 col-form-label">USER ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="user id">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="anggota_kelompok" class="col-sm-2 col-form-label">ANGGOTA KELOMPOK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="anggota_kelompok" name="anggota_kelompok"
                                placeholder="anggota kelompok">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="save" value="Save Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk output data -->
        <div class="card">
            <h5 class="card-header text-white bg-secondary ">Data Mahasiswa</h5>
            <div class="card-body">

            </div>



</body>

</html>
https://www.youtube.com/watch?v=ZgNH0UfakeM
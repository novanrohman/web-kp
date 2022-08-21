<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Mahasiswa</title>
    <!-- sambung file css bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <?php
            //include file koneksi ke database
            include ('../../connection/db_kp.php');

            //fungsi mencegah inputan karakter yang tidak sesuai
            function input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            //cek kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $id=input($_POST["id"]);
                $nama_mahasiswa=input($_POST["nama_mahasiswa"]);
                $nim=input($_POST["nim"]);
                $kelas=input($_POST["kelas"]);
                // $email=input($_POST["email"]);
                $alamat=input($_POST["alamat"]);
                $user_id=input($_POST["user_id"]);
                $anggota_kelompok=input($_POST["anggota_kelompok"]);


                //query input data ke tabel data mahasiswa
                $sql="insert into mahasiswa (id,nama_mahasiswa,nim,kelas,alamat,user_id,anggota_kelompok_id)
                values ('$id', '$nama_mahasiswa', '$nim', '$kelas', '$alamat', '$user_id',$anggota_kelompok')";


                //eksekusi query diatas
                $hasil=mysqli_query($conn, $sql);

                //kondisi berhasil atau tidak dalam eksekusi query di atas
                if ($hasil) {
                    header("Location:index.php");
        
                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal Disimpan.</div>";
                }

            }
            ?>

        <h2>Input Data</h2>

        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="form-group">
                <label>Id:</label>
                <input type="text" name="id" class="form-control" placeholder="Masukkan Id" required />
            </div>

            <div class="form-group">
                <label>Nama Mahasiswa:</label>
                <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Masukkan Nama" required />
            </div>

            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required />
            </div>

            <div class="form-group">
                <label>Kelas:</label>
                <input type="text" name="kelas" class="form-control" placeholder="Masukkan Kelas" required />
            </div>

            <div class="form-group">
                <label>Alamat:</label>
                <textarea name="alamat" class="form-control" rows="5" placeholder="Masukkan Alamat" required></textarea>
            </div>

            <div class="form-group">
                <label>User Id:</label>
                <input type="text" name="user_id" class="form-control" placeholder="Masukkan User Id" required />
            </div>

            <div class="form-group">
                <label>Anggota Kelompok:</label>
                <input type="text" name="anggota_kelompok" class="form-control" placeholder="Masukkan Kelompok"
                    required />
            </div>

            <buton type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
        </body>
        </html>













        <!-- <!DOCTYPE html>
<html>
    <thead>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, initial-scale=1.0">

        <title>CRUD DATA DOSEN</title>
</thead>

<tbody>
    <h2>CRUD DATA DOSEN INFORMATIKA</h2>
    <br/>
    <a href="index.php">KEMBALI</a>
    <br/>
    <br/>
    <h3>TAMBAH DATA DOSEN</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Id</td>
                <td>input type="text" name="id"></td>
            </tr>
            <tr>
                <td>NAMA DOSEN</td>
                <td>input type="text" name="Nama_dosen"></td>
            </tr>   
            <tr>
                <td>NIK</td>
                <td>input type="number" name="nim"></td>
            </tr>
            <tr>
                <td>User_Id</td>
                <td>input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>
</html>
                 -->
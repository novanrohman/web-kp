<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title >Hasil Form Validation</title>
</head>
<body>
    <div class="container">
    
    <form method="POST" action="hasil.php">
        <div class="title">
            Data Mahasiswa
        </div>

        <div class="form">
            <div class="hasil_field">
                <span class="nama">Nama Lengkap</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["nama"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Nomor Induk Mahasiswa</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["nim"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Tanggal Lahir</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["tl"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Jenis Kelamin</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["jk"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Usia</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["us"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Email</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["em"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Nomor Telpon</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["nt"];?></span>
            </div>

            <div class="hasil_field">
                <span class="nama">Alamat</span>
                <span class="titik">:</span>
                <span class="input"><?= $_POST["al"];?></span>
            </div>
        </div>
        </form>
        <div class="input_field">
                <a href="index.php"><input type="submit" value="Back" class="btn1"></a>
        </div>
    </div>
</body>
</html>
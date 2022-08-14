<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title >Form Validation</title>
</head>
<body>
    <div class="container">
    <form method="POST" action="hasil.php">
        <div class="title">
            Form Biodata Mahasiswa
        </div>

        <div class="form">
            <div class="input_field">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="input" required>
            </div>

            <div class="input_field">
                <label>Nomor Induk Mahasiswa</label>
                <input type="text" name="nim" class="input" required>
            </div>

            <div class="input_field">
                <label>Tanggal lahir</label>
                <input type="date" name="tl" class="input" required>
            </div>

            <div class="input_field">
                <label>Jenis Kelamin</label>
                <div class="custom_select">
                    <select name="jk" required>
                        <option>Select</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>
                </div>            
            </div>

            <div class="input_field">
                <label>Usia</label>
                <input type="text" name="us" class="input" required>
            </div>

            <div class="input_field">
                <label>Email</label>
                <input type="text" name="em" class="input" required>
            </div>

            <div class="input_field">
                <label>Nomor Telpon</label>
                <input type="text" name="nt" class="input" required>
            </div>
<!-- 
            <div class="input_field">
                <label>Foto Profil</label>
                <input type="file" accept="image/*">
            </div> -->

            <div class="input_field">
                <label>Alamat</label>
                <textarea class="textarea" name="al" required></textarea>
            </div>

            <div class="input_field terms">
                <label class="check">
                    <input type="checkbox" required>
                    <span class="checkmark"></span>
                </label>
                <p>Aggree to terms and condition</p>
            </div>

            <div class="input_field">
                <input type="submit" value="Submit" class="btn">
            </div>
        </div>
    </form>
    </div>
</body>
</html>
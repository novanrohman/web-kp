<?php
// cek dulu apakah ada sessionnya ngak ?
// session_start();

// if (!isset($_SESSION['login'])) {
//     header("Location: login.php");
//     exit;
// }
// kita hubungkan file function
require "fungsi2.php";
class PendaftaranKp
{
    //atribut objek
    public $tempatKp;
    public $alamatKp;
    public $TanggalMulai;
    public $TanggalSelesai;
    private $anggotaKelompokId;
    private $dosenId;
    private $perusahaanId;

    // set atributnya 
    // set atributnya untuk mengAkses privat atribut
    public function setAtribut($anggotaKelompokId, $dosenId, $perusahaanId)
    {
        $this->anggotaKelompokId = $anggotaKelompokId;
        $this->dosenId = $dosenId;
        $this->perusahaanId = $perusahaanId;
    }
    public function __construct($tempatKp, $alamatKp, $TanggalMulai, $TanggalSelesai, $anggotaKelompokId, $dosenId, $perusahaanId)
    {   
        $this->tempatKp = $tempatKp;
        $this->alamatKp = $alamatKp;
        $this->TanggalMulai = $TanggalMulai;
        $this->TanggalSelesai = $TanggalSelesai;
        $this->anggotaKelompokId = $anggotaKelompokId;
        $this->dosenId = $dosenId;
        $this->perusahaanId = $perusahaanId;
    }
    // ambil getAtribut untuk meng akses privat atribut
    public function getAnggotaKelompokId()
    {
        return  $this->anggotaKelompokId;
    }
    public function getDosenId()
    {
        return  $this->dosenId;
    }
    public function getPerusahaanId()
    {
        return  $this->perusahaanId;
    }
    //ambil semua data array dalam variable global $_FILES
    // Ambil semua inputan user yang  dimasukan
    function ambilInputUser()
    {
        //masukan satu array
        $array = [
            "tempat" => $this->tempatKp,
            "alamat" =>  $this->alamatKp,
            "tanggal_mulai" => $this->TanggalMulai,
            "tanggal_selesai" =>  $this->TanggalSelesai,
            "anggota" => $this->anggotaKelompokId,
            "dosen" => $this->dosenId,
            "perusahaan" =>  $this->perusahaanId
        ];
        return $array;
    }
}
if (isset($_POST["submit"])) {
    if (tambah_anggota($_POST) > 0) {
        echo "<script>
                alert ('data berhasil ditambah');
                document.location .href = 'form.php'
            </script>";
    } else {
        // echo "<script>
        //         alert ('data gagal ditambah');
        //         document.location.href = 'form.php'
        //     </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>tambah data perusahaan</h1>
    <form action="" method="post">
        <label for="id_perusahaan">id prusahaan :</label>
        <input type="text" name="Tempat_KP" id="id_perusahaan" required>
        <br>
        <label for="nama_perusahaan">nama prusahaan :</label>
        <input type="text" name="Alamat_Kp" id="nama_perusahaan" required>
        <br>
        <label for="alamat_perus">alamat :</label>
        <input type="date" name="Tanggal_Mulai" id="alamat_perus" required>
        <br>
        <label for="email_perus">email :</label>
        <input type="date" name="Tanggal_Selesai" id="email_perus" required>
        <br>
        <label for="telp_perus">telp :</label>
        <input type="text" name="Anggota_Kelompok" id="telp_perus" required>
        <br>
        <label for="telp_perus">telp :</label>
        <input type="text" name="Dosen_Id" id="telp_perus" required>
        <br>
        <label for="telp_perus">telp :</label>
        <input type="text" name="Perusahaan_Id" id="telp_perus" required>
        <br>
        <button name="submit" type="submit">kirim</button>
    </form>
</body>

</html>
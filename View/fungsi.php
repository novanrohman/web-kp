<?php
//koneksi
$conn = mysqli_connect("localhost", "root", "", "db_kp");
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $row = [];
    while ($rows = mysqli_fetch_assoc($result)) {
        $row[] = $rows;
    }
    return $row;
}

//fungsi tambah
function tambah($data)
{
    global $conn;
    $tempat_kp = htmlspecialchars($data["tempat_kp"]);
    $alamat_kp = htmlspecialchars($data["alamat_kp"]);
    $tanggal_mulai = htmlspecialchars($data["tanggal_mulai"]);
    $tanggal_selesai = htmlspecialchars($data["tanggal_selesai"]);
    $anggota_kelompok = ($data["anggota_kelompok"]);
    $dosen_id =  ($data["dosen_id"]);
    $perusahaan_id =  ($data["perusahaan_id"]);
    $proposal = upload_prop();
    if (!$proposal) {
        return false;
    }
    $perusahaan_id =  ($data["perusahaan_id"]);
    $query = "INSERT INTO pendaftaran_kp VALUES ('','$tempat_kp','$alamat_kp','$tanggal_mulai','$tanggal_selesai','$proposal','$anggota_kelompok','$dosen_id','$perusahaan_id')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
//upload
function upload_prop()
{
    $file = $_FILES['proposal']['name'];
    $lokasi = $_FILES['proposal']['tmp_name'];
    $ekstensiFileValid = ['pdf'];
    $error = $_FILES['proposal']['error'];
    $ekstensiFile = explode('.', $file);
    $ekstensiFile = strtolower(end($ekstensiFile));
    if ($error === 4) {
        echo "
        <script>
        alert('Masukan File Terlebih dahulu');
        </script>
        ";
    }
    if (!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "
        <script>
        alert('Pastikan File Berektensi PDF');
        </script>
        ";
        return false;
    }
    move_uploaded_file($lokasi, "file/" . $file);
    return $file;
}

// Membuat fungsi hapus
function hapus($nis)
{
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = $nis");
    return mysqli_affected_rows($koneksi);
}

// Membuat fungsi ubah

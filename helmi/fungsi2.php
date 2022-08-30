<?php
$conect = mysqli_connect("localhost", "root", "", "test");
function tambah_anggota($data)
{
    global $conect;
    $tKp = htmlspecialchars($data['Tempat_KP']);
    $alKp =   htmlspecialchars($data['Alamat_Kp']);
    $tglMulai = htmlspecialchars($data['Tanggal_Mulai']);
    $tglSelesai = htmlspecialchars($data['Tanggal_Selesai']);
    $anggotaKelompokId = htmlspecialchars($data["Anggota_Kelompok"]);
    $dosenId =  htmlspecialchars($data['Dosen_Id']);
    $persId = htmlspecialchars($data['Perusahaan_Id']);
    $pendaftaran = new PendaftaranKp($tKp, $alKp, $tglMulai, $tglSelesai, $anggotaKelompokId, $dosenId, $persId);
    $up = $pendaftaran->ambilInputUser();
    foreach ($up as $key => $value) {
        $k[] = $key;
        $v[] = "'" . $value . "'";
    }
    $nama_tabel  = implode(", ", $k);
  
    $values = implode(", ", $v);
   
    $query = "INSERT INTO kerja ($nama_tabel) VALUES ($values)";
    mysqli_query($conect, $query);
    return mysqli_affected_rows($conect);
}

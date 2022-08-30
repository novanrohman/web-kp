<?php
$conn = mysqli_connect("localhost:3307","root","","db_kp");
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $row =[];
    while ($rows = mysqli_fetch_assoc($result)){
        $row[] = $rows;
    }
    return $row;
}
function surat_ijin($data){
    global $conn;
    $proposal = upload_surat_ijin();
    if(!$proposal){
        return false;
    }
    $tanggal = $data["tanggal"];
    $anggota_kelompok_id = $data["anggota_kelompok_id"];
    $query = "INSERT INTO lembar_kerja VALUES ('', '$tanggal','$proposal', '$anggota_kelompok_id')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);


}
function upload_surat_ijin(){
$file = $_FILES['file']['name'];
$lokasi = $_FILES['file']['tmp_name'];
$ekstensiFileValid = ['pdf'];
$error = $_FILES['file']['error'];
$ekstensiFile = explode('.', $file);
$ekstensiFile = strtolower(end($ekstensiFile));
if ($error === 4) {
     echo"
    <script>
    alert('Masukan File Terlebih dahulu');
    </script>
    ";
}
if( !in_array($ekstensiFile, $ekstensiFileValid) ){
    echo"
    <script>
    alert('Pastikan File Berektensi PDF');
    </script>
    ";
    return false;
}
move_uploaded_file($lokasi, "File/".$file);
return $file;



}
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM lembar_kerja WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $file_lama = $data["file_lama"];
    $tanggal = htmlspecialchars($data["tanggal"]);
    $ketua = ($data["anggota_kelompok_id"]);
    if ($_FILES['file']['error'] === 4) {
        $file = $file_lama;
    } else {
        $file =  Upload_surat_ijin();
    }
    $query = "UPDATE lembar_kerja SET 
        tanggal = '$tanggal',
        file = '$file',
        anggota_kelompok_id = '$ketua'
        WHERE id = '$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

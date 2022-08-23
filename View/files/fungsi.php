<?php
$conn = mysqli_connect("localhost:","root","","db_kp");
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
    $query = "INSERT INTO tabel_baru VALUES ('','$proposal')";
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
move_uploaded_file($lokasi, "files/".$file);
return $file;
}
?>
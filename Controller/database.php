include '../connection/db.php';

class database extends koneksi{

public $koneksi;
function __construct(){
$this->koneksi = $this->connect();
}

function tampil_data(){
$data = mysqli_query($this->koneksi, "SELECT * FROM mahasiswa");

while($result = mysqli_fetch_array($data)){
$hasil[] = $result;
}
return $hasil;
}

function input($id,$nama,$nim,$kelas,$email,$alamat,$user_id,$anggota_kelompok){
mysqli_query($this->koneksi, "INSERT INTO mahasiswa VALUES(' ', '$nama', '$nim', '$kelas', '$email', '$alamat', $user_id', '$anggota_kelompok_id')");
}

function hapus($id,$nama,$nim,$kelas,$email,$alamat,$user_id,$anggota_kelompok){
mysqli_query($this->koneksi, "DELETE FROM mahasiswa VALUES(' ', '$nama', '$nim', '$kelas', '$email', '$alamat', $user_id', '$anggota_kelompok_id')");
}

function edit($id){
mysqli_query($this->koneksi, "SELECT * FROM mahasiswa VALUES(' ', '$nama', '$nim', '$kelas', '$email', '$alamat', $user_id', '$anggota_kelompok_id')");
while($d = mysqli_fetch_array($data)){
}
return $hasil->db_kp->get()->row();
}
}
?>
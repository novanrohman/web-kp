<?php
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


// Membuat fungsi tambah
function tambah($data)
{
    global $conn;
    $nilai_pembimbing_lapangan = htmlspecialchars($data["nilai_pembimbing_lapangan"]);
    $nilai_pembimbing_kp = htmlspecialchars($data["nilai_pembimbing_kp"]);
    $nilai_penguji = htmlspecialchars($data["nilai_penguji"]);
    $pendaftaran_ujian_kp_id = ($data["pendaftaran_ujian_kp_id"]);
    $bukti_nilai_pembimbing_lapangan = upload_bukti();
    if (!$bukti_nilai_pembimbing_lapangan) {
        return false;
    }

    $query = "INSERT INTO nilai VALUES ('','$nilai_pembimbing_lapangan','$nilai_pembimbing_kp','$nilai_penguji','$pendaftaran_ujian_kp_id','$bukti_nilai_pembimbing_lapangan')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Membuat fungsi hapus
function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM nilai WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// Membuat fungsi ubah
function upload_bukti()
{
    $file = $_FILES['bukti_nilai_pembimbing_lapangan']['name'];
    $lokasi = $_FILES['bukti_nilai_pembimbing_lapangan']['tmp_name'];
    $ekstensiFileValid = ['pdf'];
    $error = $_FILES['bukti_nilai_pembimbing_lapangan']['error'];
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

function change($data)
{
    global $conn;
    $id = $data["id"];
    $nilai_pembimbing_lapangan = htmlspecialchars($data["nilai_pembimbing_lapangan"]);
    $nilai_pembimbing_kp = htmlspecialchars($data["nilai_pembimbing_kp"]);
    $nilai_penguji = htmlspecialchars($data["nilai_penguji"]);
    $pendaftaran_ujian_kp_id = ($data["pendaftaran_ujian_kp_id"]);

    // $bukti_nilai_pembimbing_lapangan = upload_bukti();

    // $proposal = $data['proposal'];

    // if ($_FILES['proposal']['error'] === 4) {
    //     $proposal = $proposal;
    // } else {
    //     $proposal = upload_prop();
    // }
    $query = "UPDATE nilai SET nilai_pembimbing_lapangan = '$nilai_pembimbing_lapangan', nilai_penguji = '$nilai_penguji',  nilai_pembimbing_kp = ' $nilai_pembimbing_kp ', pendaftaran_ujian_kp_id = '$pendaftaran_ujian_kp_id' WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}



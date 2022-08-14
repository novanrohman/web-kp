<?php

require_once("db.php");

if(isset($_POST['register'])) {

    //filter data yang diinputkan
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    //enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $id_role = filter_input(INPUT_POST, 'id_role', FILTER_VALIDATE);

    //menyiapkan query
    $sqli = "INSERT INTO users(id, username, password, id_role)
             VALUES (:id, :username, :password, :id_role)";
             $stmt =$db->prepare($sqli);

             //bind parameter ke query
             $param = array(
                ":id" =>$id,
                ":username" => $username,
                ":password" => $password,
                ":id_role" => $id_role
             );

             //eksekusi query untuk menyimpan ke database
             $saved = $stmt->execute($params);

             //jika query simpan berhasil, maka user sudah terdaftar
             // maka dialihkan ke halaman login
             if($saved) header("Location :index.php");  
}
?>

<!doctype html>
<html lang="en>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Register Mahasiswa</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-dark">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Selamat Datang Mahasiswa POLITEKNIK NEGERI BANYUWANGI</h4>
        <p>Sudah punya akun? <a href="index.php">login di sini</a></p>

        <form action=" " method="POST">
            
        <div class ="form-group">
                <label for="name">Id</label>
                <input class="form-control" type="text" name="id" placeholder="Id" />
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form=control" type="text" name="username" placeholder="Username"/>
            </div>

            <div class="form-group">
            <label for="password">Password</label>
                <input class="form=control" type="password" name="password" placeholder="Password"/>
            </div>

            <div class="form-group">
            <label for="id_role">Id role</label>
                <input class="form=control" type="text" name="id_role" placeholder="Id_role"/>
            </div> 

            <input type="submit" class="btn btn-succes btn-block" name="register" value="Daftar" />

</form>
</div>

</div>
</div>
</body>
</html>


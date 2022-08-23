<?php
require 'fungsi.php';

if (isset($_POST["submit"])) 
$id = $_GET["file"]; {
    if (delete($proposal)>0){
        echo "<script>
            alert ('data berhasil dihapus');
            document.location .href = 'kp.php'
        </script>" ;
        
    }
    else {
        echo "<script>
            alert ('data gagal dihapus');
            document.location.href = 'kp.php'
        </script>";
    }
}

?>
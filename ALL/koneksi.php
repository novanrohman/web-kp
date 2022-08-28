<?php

class koneksi{
    
 
	public function connect(){
        $host = "localhost";
        $uname = "root";
        $pass = "";
        $db = "admin";
		$conn = new mysqli($host, $uname, $pass, $db);

        return $conn;
	}

}

?>
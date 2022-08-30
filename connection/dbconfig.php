<?php

class Databases
{


	public $host = 'localhost';
	public $name = 'root';
	public $pass = '';
	public $dbname = 'db_kp';

	public $mysqli;

	function __construct()
	{

		$this->mysqli = new mysqli($this->host, $this->name, $this->pass, $this->dbname);

		if ($this->mysqli->connect_errno) {
			echo "DATABASE TIDAK ADA !  ";
			exit;
		}
	}

	public function get_dataDosen()
	{
		global $conn;
		$id = $_SESSION['id'];
		$sql = "SELECT * FROM dosen WHERE user_id = '$id'";
		$result = mysqli_query($conn, $sql);

		return $result;
	}
}

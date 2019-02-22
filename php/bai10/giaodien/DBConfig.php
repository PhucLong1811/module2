<?php 
class DBConnection{
	private $hotname = "127.0.0.1:3306";
	private $username = "root";
	private $password = "";
	private $database = "test";

	protected $conn;

	public function connect(){
		if(!isset($this->connect)){
			$this->connect = new mysqli($this->hotname,$this->username,$this->password,$this->database);
			mysqli_set_charset($this->conn,"utf-8");
			if (!$this->connect) {
				echo 'kết nối thất bại';
				exit;
			}
		}
		return $this->conn;
	}
}
?>
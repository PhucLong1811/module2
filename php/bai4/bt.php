<?php 
class User{
	public $username;
	public $userId;
	public $email;
	public $password;
	function __construct($username,$userId,$email,$password){
		$this -> $username = $username;
		$this -> $userId = $userId; 
		$this -> $email = $email;
		$this -> $password = $password;

	}
}

class Admin extends User
{
	public $accessLevel;
	function __construct($username,$userId,$email,$password,$accessLevel)
	{
		parent::__construct($username,$userId,$email,$password);
		$this->$accessLevel = $accessLevel;
	}
}
?>
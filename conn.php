<?php 

Class Conn{

	public $con;
	function __construct($host="localhost", $user="root", $pw="", $db="companydb")
	{
		$this->con = new mysqli($host, $user, $pw, $db);
	}

	public function disconnect(){
		$this->con=null;
	}
}

 ?>
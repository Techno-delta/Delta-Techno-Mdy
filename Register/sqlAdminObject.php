<?php 

require '../conn.php';

class Admin extends conn{

	function __construct(){
		parent::__construct();
	}
	function addAdmin($name, $password, $email, $phone){
		$sql = "INSERT INTO developermode VALUES(NULL, '$name' , '$password' , '$email' , '$phone') ";

		$this->con->query($sql);
		return true;
	}

}

?>
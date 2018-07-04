<?php 

require 'conn.php';

class Company extends conn{

	function __construct(){
		parent::__construct();
	}

	function addCompany($name, $type, $address, $phone){
		$sql = "INSERT INTO companyTable VALUES(NULL, '$name' , '$type' , '$address' , '$phone') ";

		$this->con->query($sql);
		return true;
	}

	function checkCompany($name,$id=0){
		$sql = "SELECT * FROM companyTable WHERE name='$name' AND id!='$id' ";
		$result = $this->con->query($sql);
		return $result->num_rows;
	}
}
 ?>
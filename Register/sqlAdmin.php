<?php 

include "sqlAdminobject.php";

$admin = new Admin();

function vaild($data){
	$data = trim($data);
	$data = htmlspecialchars($data);
	$data = stripcslashes($data);
	return $data;
}

if (isset($_POST['save'])){
 	// print_r($_POST);
	$name = vaild($_POST['name']);
	$password = vaild($_POST['password']);
	$email = vaild($_POST['email']);
	$age = vaild($_POST['age']);
	// echo "No I am stay in outside.";

	if ($name != "" && $password != "" && $email != "" && $age != ""){
	// echo "Creating in db.";
		$admin->addAdmin($name, $password, $email, $age);
		header("location:login.php");
	}
} 
?>
<a href="../home.php">Go to home</a>
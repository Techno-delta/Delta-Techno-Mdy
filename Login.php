<!DOCTYPE html>
<html>
<head>

	<title>LogIn</title>
	<link rel="stylesheet" type="text/css" href="../style1.css">

</head>
<body>
<div class="userform">
	<form action="<?php $_PHP_SELF ?>" method="post">

		<h3>Please Login with your acc.</h3>
		<div>
			<label for="userName">User Name</label><br>
			<input type="text" name="username" id="username" required="" placeholder="User Name" autofocus="">
		</div>
		<div>
			<label for="password">Password</label><br>
			<input type="password" name="password" id="password" required="" placeholder="Password">
		</div>
		<button class="btn btn-login" name="login">LogIn</button><br>
		<!-- <button type="reset" class="btn btn-default">Cancle</button> -->

	</form>
	<h4>If you don't have acc Register <a href="register.php">Here!</a></h4>
</div>
</body>
</html>

<?php

	if(isset($_POST['login'])){
   		$userName = $_POST['username'];
	   	echo "Your search Name is => ".$userName;
	    echo "<br>";
	    $password = $_POST['password'];
	    echo "The Password is => ".$password;
	}

	include '../conn.php';

	if(isset($_POST['login'])){
		
		$db = new Conn();
		$sql = "SELECT * FROM developermode";
		$res = $db->con->query($sql);
		$i=0;

		while ($row =$res->fetch_assoc())
		{
			if($userName != $row['Name'] && $password != $row['Password']){
				// echo ("False");
				$i++;
			}else{
				header("location:../addCompany.php");
				$i++;
				// echo ("True");
			}
		}
	}
?>
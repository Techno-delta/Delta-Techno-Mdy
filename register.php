<?php 
	include '../conn.php';
 ?>


<!DOCTYPE html>
<html>
<head>

	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../style1.css">

</head>
<body>
	
	<h3>Welcome form Registration Form</h3>

	<div class="userform">
		<form action="sqlAdmin.php" method="post">
			
			<input type="text" name="name" id="name" required="" placeholder="Name" autofocus=""><br>
	
			<input type="password" name="password" id="password" required="" placeholder="Password"><br>

			<input type="email" name="email" id="email" required="" placeholder="Email"><br>

			<input type="text" name="age" id="age" required="" placeholder="Age"><br>

			<button class="btn btn-success" name="save">Save</button><br>
			<button type="reset" class="btn btn-default">Reset</button>
			
		</form>
	</div>

	<h4>If you have acc LogIn <a href="Login.php">Here!</a></h4>
</body>
</html>

<a href="../home.php" class="backHome">go back home</a>

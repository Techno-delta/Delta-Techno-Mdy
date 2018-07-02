<!DOCTYPE html>
<html>
<head>
	<title>Add Company</title>
</head>
<body>
	<h2>Add new Company infomation</h2>
	<div class="userform">				
		<form action="#" method="post">		
		<!-- <form action="<?php $_PHP_SELF ?>" method="post"> -->
			<div>
				<label for="name">Name</label><br>
				<input type="text" name="name" id="name" required="" placeholder="Name" autofocus="">
			</div>
			<div>
				<label for="type">Type</label><br>
				<input type="text" name="type" id="type" required="" placeholder="Type">
			</div>
			<div>
				<label for="address">Address</label><br>
				<textarea name="address" id="address" required="" placeholder="Address"></textarea>
			</div>
			<div>
				<label for="phone">Phone</label><br>
				<input type="text" name="phone" id="phone" required="" placeholder="Phone">
			</div>
			<div class="btn_group">
				<button class="btn btn-add" name="add">Add</button><br>
				<button type="reset" class="btn btn-default">Reset</button>
			</div>
		</form>
	</div>
</body>
</html>

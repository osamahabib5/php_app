<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>s
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<?php  require_once 'process.php';     ?>
	<div class = "row justify-content-center">
	<form action="process.php" method="POST">
		<div class = "form-group">
		<label>Name</label>
		<input type="text" name="name" id="name" placeholder="Enter your name" class= "form-control">
		</div>
		<label>Location</label>
		<input type="text" name="address" id="address" placeholder="Location" class="form-control"><br>
		<button type="submit" name="save" class="btn btn-primary">Save</button>
	</form>
	</div>
</body>
</html>
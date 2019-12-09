<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php require_once "process.php";?>
	<div class="row justify-content-center">
	<form action="process.php" method="Post">
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="Enter Your name">
	</div>
		<div class="form-group">
		<label>Location</label>
		<input type="text" name="Location" class="form-control" value="Enter Your location">
	</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary" name="save" > Save</button>
	</div>	

	</form>
</div>
</html>
</body>

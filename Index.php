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

		<?php
		if (isset($_SESSION['message'])): ?>

		<div class="alert alert-danger<?=$_SESSION['msg_type']?>">

			<?php
				echo $_SESSION['message'];
				unset ($_SESSION['message']);
			?>

		</div>
	<?php endif 	?>

	<div class="container">

	<?php 
		$mysqli = new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
		$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
	?>
		
			<div class="row justify-content-center">
			  <table class="table">
			 	 <thead>
			  		<tr>
                 	  <th>Name</th>
                   	  <th>Location</th>
                      <th colspan="2">action</th>
  			  	</tr>
			  </thead>
			  <?php
			  	while($row = $result->fetch_assoc()): ?>
			  	<tr>
			  		<td><?php echo $row['name'];?> </td>
			  		<td><?php echo $row['location'];?> </td>
			  		<td>
			  			<a href="index.php?edit=<?php echo $row['id'];?>"
			  				class="btn btn-info">edit</a>
			  			<a href="process.php?delete=<?php echo $row['id'];?>"
			  				class="btn btn-danger">delete</a>
			  		</td>
			  	</tr>
			  <?php endwhile; ?>

			</table>
			</div>
		</div>
		
<?php
		function pre_r($array){
			echo "<pre>";
			print_r($array);
			echo "</pre>";
		}
	?>

	<div class="row justify-content-center">
	<form action="process.php" method="Post">
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="Enter Your name">
	</div>
		<div class="form-group">
		<label>location</label>
		<input type="text" name="location" class="form-control" value="Enter Your location">
	</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary" name="save" > Save</button>
	</div>	
	</form>
</div>

</html>
</body>
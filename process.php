<?php
 
 $mysqli = new mysqli('localhost', 'root','', 'crud') or die(mysql_error($mysqli));

 if(isset($_POST['save'])){
 	$name= $_POST['name'];
 	$location= $_POST['location'];

 	$_SESSION['message'] = "Record has been saved!";
 	$_SESSION['msg_type'] = "Success";

 	$mysqli->query("INSERT INTO data (name,location) Values ('$name','$location')") or die ($mysqli->error);
 }

 if(isset($_GET['delete'])){
 	$id = $_GET['delete'];
 	$mysqli->query("DELETE FROM data where id=$id") or die($mysqli->error());

 	$_SESSION['message'] ="Record has been deleted";
 	$_SESSION['message'] ="danger";
 }
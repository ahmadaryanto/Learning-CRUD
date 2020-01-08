<?php
 session_start();
 $mysqli = new mysqli('localhost', 'root','', 'crud') or die(mysql_error($mysqli));

 $name='';
 $location='';

 if(isset($_POST['save'])){
 	$name= $_POST['name'];
 	$location= $_POST['location'];



 	$mysqli->query("INSERT INTO data (name,location) Values ('$name','$location')") or die ($mysqli->error);


 	
 	$_SESSION['message'] = "Record has been saved!";
 	$_SESSION['msg_type'] = "success";
 	header("location:index.php");
 }

 if(isset($_GET['delete'])){
 	$id = $_GET['delete'];
 	$mysqli->query("DELETE FROM data where id=$id") or die($mysqli->error());

 	$_SESSION['message'] ="Record has been deleted";
 	$_SESSION['message'] ="danger";

 	header("location:index.php");
 }

 if(isset($_GET['edit'])){
 	$id = $_GET['edit'];
 	$result = $mysqli->query("SELECT * From data WHERE id=$id") or die($mysqli->error());
 	if(count($result)==1){
 		$row = $result->fetch_array();
 		$name = $row['name'];
 		$location =$row['location'];
 	}

 }	
 
<?php
	// connect with servername, username, password, databasename
	$connection = new mysqli('localhost','root','','todolist');

	// prepare id from the url querystring to find the record
	$id = $_GET['id'];
	
	// prepare delete instruction
	$sqldelete = "DELETE FROM `todolist`.`list` WHERE `list`.`id` = $id";
	
	// execute delete instruction
	mysqli_query($connection, $sqldelete);
	header("location: todolist.php")
?>
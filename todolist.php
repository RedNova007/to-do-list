

<form action="todolist.php"  method="GET">

	Description: <input type="text" name="Description">
	Created: <input type="text" name="Created">
	Priority: <input type="text" name="Priority">
	Due Date: <input type="text" name="DueDate">
	<br><br>
	<input type="submit" name="Submit">
</form>





<?php

$connection = new mysqli('localhost','root','','todolist');
	
	@$Descriptionform = $_GET['Description'];

	@$Createdform = ($_GET['Created']);

	@$Priorityform = ($_GET['Priority']);

	@$DueDateform = ($_GET['DueDate']);

	

			 $sqlinsert = "INSERT INTO `list` (	`Description`, `Created`, `Priority`, `Due Date`)
				VALUES ('$Descriptionform', '$Createdform', '$Priorityform', '$DueDateform')";

			$connection->query($sqlinsert);

?>



	<?php

	$sqlselect = "SELECT `id`, `Description`, `Created`, `Priority`, `Due Date` FROM `list`";

		$results = $connection -> query($sqlselect);

			$todolist = $results->fetch_all(MYSQLI_ASSOC);
	?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	 <table>
<?php
	foreach ($todolist as $todo) {
?>

			<tr>
				<td><?php echo $todo['Description']; ?></td>
				<td><?php echo $todo['Created']; ?></td>
				<td><?php echo $todo['Priority']; ?></td>
				<td><?php echo $todo['Due Date']; ?></td> 
 				<a href="delete.php?id=<?php echo $todo ['id'] ?>"> <button>Delete</button> </a> <br>
			</tr>

<?php
		}
?>
	</table>





</body>
</html>	
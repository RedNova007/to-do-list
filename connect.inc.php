<?php
$conn_error = 'Could not connect.';
$empty		= 'vul wat in'; 


$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

$mysql_db = 'todolist';


if  (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!@mysql_select_db($mysql_db)) {
	die($conn_error);
}

		
?>
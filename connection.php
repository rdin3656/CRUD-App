<?php

// // mysql_connect("database-host", "username", "password")
// $conn = mysql_connect("localhost","root","root") 
// 			or die("cannot connected");
// 
// // mysql_select_db("database-name", "connection-link-identifier")
// @mysql_select_db("test2",$conn);


$databaseHost = 'localhost';
$databaseName = 'test2';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>

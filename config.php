<?php
$databaseHost = 'localhost';
$databaseName = 'TestDatabase';
$databaseUserName = 'root';
$databasePassword = '';


$mysqli= new mysqli($databaseHost,$databaseUserName,$databasePassword,$databaseName);
if($mysqli->connect_error){
	die('Connection Failed - ' . $mysqli->connect_error);
}
else{
	echo "connection success ...";
}

?>
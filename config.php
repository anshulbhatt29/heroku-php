<?php
/*
$databaseHost = 'localhost';
$databaseName = 'TestDatabase';
$databaseUserName = 'root';
$databasePassword = '';*/

//Remote database
$databaseHost = 'remotemysql.com';
$databaseName = 'RTYPy1EWAb';
$databaseUserName = 'RTYPy1EWAb';
$databasePassword = 'y5Q4rTXatn';

$mysqli= new mysqli($databaseHost,$databaseUserName,$databasePassword,$databaseName);
if($mysqli->connect_error){
	die('Connection Failed - ' . $mysqli->connect_error);
}
else{
	echo "connection success ...";
}

?>
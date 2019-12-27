<?php 
require "connect.php";
// Attempt create database query execution
$sql = "CREATE DATABASE demo";
if ($mysqli ->query($sql) === true) {
	echo "Database created successfully";
}else{
	echo "ERROR: Could not able to execute $sql. " . $mysqli ->error;

}
//close connection
$mysqli->close(); ?>
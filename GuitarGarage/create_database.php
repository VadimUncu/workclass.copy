<?php

//Run this script to generate the required database in your local computer (WampServer). 
//This script only needs to be run once. Then, you can use the database by simply connecting to it.

$con = mysqli_connect("localhost", "root", "","");
if (mysqli_error($con))
echo "Failed to connect to MySQL: " . mysqli_error($con)."<br>";
else
	echo "Connection established successfully"."<br>";
	
$sql = "CREATE DATABASE guitar_garage";
if (mysqli_query($con,$sql))
	echo "Database Created successfully"."<br>";
else
	echo "Error in creating database: ".mysqli_error($con)."<br>";


mysqli_close($con);

?>	
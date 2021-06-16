<?php

	$hostname= "localhost";
	$username="root";
	$password="";
	$dbname="domotica";
	$usertable="usu_usuarios";
	$yourfield = "nombre";
	
	// Create connection
	$conn = new mysqli($hostname, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
?>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "palmakkar";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
	$status = "connection failure";
    die("Connection failed: " . $conn->connect_error);
} 
$status = "Connected successfully";

?>
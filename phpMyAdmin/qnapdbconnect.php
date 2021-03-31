<?php
$servername = "localhost";
$username = "root";
$password = "<Your Password>"; //Here you should put your password
$dbname = "arduino";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("QNAP Database Connection Failed: " . $conn->connect_error);
}
else {
	echo "QNAP Database Connected: ";
}
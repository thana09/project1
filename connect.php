<?php
$servername = "localhost";
$username = "root";
$password = "6521061009";
$dbname="teehid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
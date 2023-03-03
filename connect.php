<?php

//database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "carmanufacturingcompany";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  //stop executing the code and echo error
  die("Connection failed: " . $conn->connect_error);
} 

?>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "carManufacturingCompany";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>



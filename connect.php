<?php
$servername = "localhost";
$username = "andr4776";
$password = "secret";
$dbname = "my_yoga";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn ->connect_error);
  
}

 ?>

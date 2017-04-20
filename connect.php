<?php
$servername = "localhost";
$username = "andr4776";
$password = "studio";
$dbname = "photo_studio";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("connection failed: " . $conn ->connect_error);

}

 ?>

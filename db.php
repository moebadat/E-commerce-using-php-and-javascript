<?php

require "config/constants.php";

$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "nice";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check if connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
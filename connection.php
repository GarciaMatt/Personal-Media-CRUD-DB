<?php

$dbhost = 'localhost'; 
$dbuser = 'root';
$dbpass = '';
$db = 'midtermdb';
// Create a database connection
$conn = new mysqli($dbhost,$dbuser,$dbpass, $db); 

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
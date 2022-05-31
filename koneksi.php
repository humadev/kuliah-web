<?php
$servername = "localhost";
$username = "root"; // sesuaikan dengan username db masing-masing
$password = "root"; // sesuaikan dengan password db masing-masing
$db = "blog"; // sesuaikan dengan password db masing-masing
 
// Create connection
$conn = new mysqli($servername, $username, $password, $db);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>

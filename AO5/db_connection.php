<?php
// Database connection variables
$host = "localhost"; // Server host
$username = "root"; // Default username in XAMPP
$password = ""; // Default password in XAMPP is empty
$dbname = "corememories"; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
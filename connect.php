<?php
$server = "localhost:3306";
$username = "root";
$password = "";
$db = "ciontable";

// Create connection
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

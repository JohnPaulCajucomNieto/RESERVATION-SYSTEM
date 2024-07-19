<?php

$host = "your_hostname";
$username = "your_username";
$password = "your_password";
$database = "your_database_name";

$conn = new mysqli($host, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php

$dbHost = 'localhost';
$dbUser = 'root'; 
$dbPass = ''; 
$dbName = 'crystal_spring_reservations'; 


$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$room_type = $_POST['room_type'];


$sql = "INSERT INTO reservations (full_name, email, phone, check_in, check_out, adults, children, room_type)
        VALUES ('$full_name', '$email', '$phone', '$check_in', '$check_out', $adults, $children, '$room_type')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation submitted ssss!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
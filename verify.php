<?php
// Database connection (update with your details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parlour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get verification code from URL
$verificationCode = $_GET['code'];

// Verify the code
$sql = "UPDATE bookings SET verified = 1 WHERE verificationCode = '$verificationCode' AND verified = 0";

if ($conn->query($sql) === TRUE) {
    if ($conn->affected_rows > 

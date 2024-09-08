<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$database = "gym_booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$session = $_POST['session'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO bookings (name, email, phone, date, time, session_type) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $phone, $date, $time, $session);

// Execute the statement
if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$stmt->close();
$conn->close();
?>

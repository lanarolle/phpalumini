<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = ""; // Use your phpMyAdmin password if any
$dbname = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$country = $_POST['country'];
$city = $_POST['city'];

// Insert data into the database
$sql = "INSERT INTO registrations (full_name, email, phone_number, birth_date, gender, address, country, city)
        VALUES ('$full_name', '$email', '$phone_number', '$birth_date', '$gender', '$address', '$country', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully.";
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
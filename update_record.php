<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$id = $_POST['id'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$birth_date = $_POST['birth_date'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$country = $_POST['country'];
$city = $_POST['city'];

// Update the record
$sql = "UPDATE registrations 
        SET full_name = '$full_name', email = '$email', phone_number = '$phone_number', 
            birth_date = '$birth_date', gender = '$gender', 
            address = '$address', country = '$country', city = '$city' 
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!";
    header("Location: index.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
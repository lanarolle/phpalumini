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

// Get the ID of the record to delete
$id = $_GET['id'];

// Delete the record
$sql = "DELETE FROM registrations WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
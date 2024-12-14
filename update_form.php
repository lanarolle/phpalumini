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

// Get the ID of the record to update
$id = $_GET['id'];

// Fetch the record's current data
$sql = "SELECT * FROM registrations WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No record found!";
    header("Location: index.php");
    exit;
}

$conn->close();
?>


<form action="update_record.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <label>Full Name:</label>
    <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" required /><br />
    <label>Email:</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" required /><br />
    <label>Phone Number:</label>
    <input type="number" name="phone_number" value="<?php echo $row['phone_number']; ?>" required /><br />
    <label>Birth Date:</label>
    <input type="date" name="birth_date" value="<?php echo $row['birth_date']; ?>" required /><br />
    <label>Gender:</label>
    <input type="radio" name="gender" value="male" <?php echo ($row['gender'] == 'male') ? 'checked' : ''; ?> /> Male
    <input type="radio" name="gender" value="female" <?php echo ($row['gender'] == 'female') ? 'checked' : ''; ?> /> Female<br />
    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address']; ?>" required /><br />
    <label>Country:</label>
    <input type="text" name="country" value="<?php echo $row['country']; ?>" required /><br />
    <label>City:</label>
    <input type="text" name="city" value="<?php echo $row['city']; ?>" required /><br />
    <button type="submit">Update</button>
</form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrations Table</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom table styling */
        .custom-table {
            border: 2px solid #007bff; /* Blue border */
            border-radius: 5px; /* Rounded corners */
            text-align: center; /* Center content */
        }

        .custom-table th {
            background-color: #343a40; /* Dark color for heading */
            color: #ffffff; /* White text for heading */
            text-align: center; /* Center headings */
        }

        .custom-table td {
            background-color: #f8f9fa; /* Light gray for table data */
            color: #212529; /* Darker text color */
            text-align: center; /* Center table data */
        }

        /* Center the table container */
        .table-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registrations Table</h2>
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

        // Fetch data from the database
        $sql = "SELECT * FROM registrations";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div class='table-container'>
                    <table class='table table-bordered table-hover custom-table'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Birth Date</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Country</th>
                                <th>City</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone_number']}</td>
                        <td>{$row['birth_date']}</td>
                        <td>{$row['gender']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['country']}</td>
                        <td>{$row['city']}</td>
                        <td>
                            <a href='update_form.php?id={$row['id']}' class='btn btn-warning btn-sm'>Update</a> 
                            <a href='delete_record.php?id={$row['id']}' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                        </td>
                      </tr>";
            }
            echo "</tbody>
                  </table>
                  </div>";
        } else {
            echo "<div class='text-center mt-5'><p>No records found.</p></div>";
        }

        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

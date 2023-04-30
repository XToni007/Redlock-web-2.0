<?php
// Database connection parameters
$servername = "172.19.0.2";
$username = "root";
$password = "password";
$dbname = "redlockdb";

// Create a new mysqli object
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SELECT query
$sql = "SELECT nama, alamat, jabatan FROM users";

// Execute the SELECT query and get the result set
$result = mysqli_query($conn, $sql);

// Count the total number of rows returned by the query
$total_rows = mysqli_num_rows($result);

// Loop through the result set and output the data
if ($total_rows > 0) {
    echo "Total users: " . $total_rows . "<br><br>";
} else {
    echo "No Users";
}

// Close the database connection
mysqli_close($conn);
?>

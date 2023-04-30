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

// Loop through the result set and output the data
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
	echo "------------------------------------" . "<br>";
        echo "Nama: " . $row["nama"] . "<br>";
        echo "Alamat: " . $row["alamat"] . "<br>";
        echo "Jabatan: " . $row["jabatan"] . "<br>";
	echo "------------------------------------" . "<br>";
	echo "<br>";
    }
} else {
    echo "No results found";
}

// Close the database connection
mysqli_close($conn);
?>

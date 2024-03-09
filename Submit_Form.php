<?php
// Database connection settings
$servername = "127.0.0.1:3306"; // Change this if your MySQL server is hosted elsewhere
$username = "user_info";
$password = "CHANDAN223";
$database = "My_Database"; // Change this to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
$name = $_POST['Name'];
$email = $_POST['Email'];
$massage = $_POST['Massage'];
}
// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO user (Name,Email, Massage) VALUES ('$name', '$email', '$massage')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close database connection
$conn->close();
?>
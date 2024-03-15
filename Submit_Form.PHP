<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // Create connection
    $conn = new mysqli('127.0.0.1:3306', 'root', 'CHANDAN223', 'My_Portfolio');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "INSERT INTO user_info (Name, Email, Message) VALUES ('$name', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
} else {
    echo "Method not allowed";
}
?>

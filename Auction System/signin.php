<?php

// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$password = $_POST['password'];

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "Aryan@24";
$dbname = "signin";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare SQL statement
$sql = "INSERT INTO users (fname, lname, birthday, email, phone, address, password) VALUES ('$fname', '$lname', '$birthday', '$email', '$phone', '$address', '$password')";

// Execute SQL statement
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);

?>

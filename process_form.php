<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employees";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the registration form
$name = $_POST['name'];
$employee_id = $_POST['employee-id'];
$title = $_POST['title'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$aadhar_no = $_POST['aadhar-no'];
$password = $_POST['password'];

// Insert data into the database
$sql = "INSERT INTO employee_info (name, employee_id, title, email, phone, aadhar_number, password) VALUES ('$name', '$employee_id', '$title', '$email', '$phone', '$aadhar_no', '$password')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, you can redirect to the employee information page
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>

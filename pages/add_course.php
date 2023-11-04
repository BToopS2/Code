<?php

$name = $_POST['Name'];
$description = $_POST['Description'];
$price = $_POST['Prix'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'eclasse');

// Check if the database connection was successful
if ($conn->connect_error) {
    echo 'Database connection failed: ' . $conn->connect_error;
    die();
}

// Prepare the SQL statement
$stmt = $conn->prepare('INSERT INTO courses (Name, Description, Prix) VALUES (?, ?, ?)');

// Bind the parameters to the SQL statement
$stmt->bind_param('sss', $name, $description, $price);

// Execute the SQL statement
$execval = $stmt->execute();

// Check if the SQL statement was successful
if ($execval) {
    echo 'New course added successfully!';
} else {
    echo 'Error adding new course: ' . $stmt->error;
}

// Close the prepared statement and the database connection
$stmt->close();
$conn->close();

// Go back to the courses page
header('location:course.php')
?>


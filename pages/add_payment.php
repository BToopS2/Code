<?php

// Get the data from the form
$name = $_POST['Name'];
$paymentSchedule = $_POST['PaymentSchedule'];
$billNumber = $_POST['BillNumber'];
$amountPaid = $_POST['AmountPaid'];
$balanceAmount = $_POST['BalanceAmount'];
$date = $_POST['Date'];

// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'eclasse');

// Check if the database connection was successful
if ($conn->connect_error) {
    echo 'Database connection failed: ' . $conn->connect_error;
    die();
}

// Insert the data into the database
$sql = 'INSERT INTO payments_list (Name, PaymentSchedule,BillNumber, AmountPaid, BalanceAmount, Date) VALUES (?, ?, ?, ?, ?, ?)';
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssssss', $name, $paymentSchedule, $billNumber, $amountPaid, $balanceAmount, $date);

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


header('location:payment_details.php')

?>

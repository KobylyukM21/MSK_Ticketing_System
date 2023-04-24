<?php
// Start the session
session_start();

// Connect to the database
$conn = new mysqli("localhost", "root", "", "ticketsystem");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form data
    $username = $_POST["username"];
    $phonenumber = $_POST["phonenumber"];
    $message = $_POST["message"];

    // Prepare the SQL statement to insert the ticket data into the "tickets" table
    $sql = "INSERT INTO tickets (username, phonenumber, message) VALUES ('$username', '$phonenumber', '$message')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "Ticket submitted successfully!";
    } else {
        echo "Error submitting ticket: " . $conn->error;
    }
}
?>
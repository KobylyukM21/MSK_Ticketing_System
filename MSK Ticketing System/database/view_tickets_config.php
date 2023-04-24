<?php
session_start();

// Check if the user is logged in, if not redirect to the login page
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "ticketsystem");

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement to retrieve open tickets
$sql = "SELECT * FROM tickets WHERE status='open'";

// Execute the SQL statement
$result = mysqli_query($conn, $sql);

// Check if any rows were returned
if (mysqli_num_rows($result) > 0) {
    // Display the tickets in a table
    echo "<table>";
    echo "<tr><th>Ticket Number</th><th>Username</th><th>Phone Number</th><th>Message</th><th>Status</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["ticket_number"] . "</td>";
        echo "<td>" . $row["username"] . "</td>";
        echo "<td>" . $row["phonenumber"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        echo "<td>" . $row["status"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>No open tickets found.</p>";
}

if (isset($_POST['update'])) {
    // Retrieve the ticket number and status from the form submission
    $ticket_number = $_POST['ticket_number'];
    $status = $_POST['status'];

    // Prepare the SQL statement to update the ticket status
    $sql = "UPDATE tickets SET status='$status' WHERE ticket_number='$ticket_number'";

    // Execute the SQL statement
    $result = mysqli_query($conn, $sql);

    // Check if the update was successful
    if ($result) {
        echo "Ticket status updated successfully.";
    } else {
        echo "Error updating ticket status: " . mysqli_error($conn);
    }
    // Redirect the user to the same page to reflect the updated ticket status
    header("Location: view_tickets.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
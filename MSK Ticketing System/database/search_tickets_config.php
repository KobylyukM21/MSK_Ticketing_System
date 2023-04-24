<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ticketsystem";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the search term and search by value were submitted
if (isset($_POST['searchTerm']) && isset($_POST['searchBy'])) {

    // Retrieve the search term and search by value from the form submission
    $searchTerm = $_POST['searchTerm'];
    $searchBy = $_POST['searchBy'];
  
    // Prepare the SQL statement to search for tickets based on the search term and search by value
    $sql = "SELECT * FROM tickets WHERE $searchBy LIKE '%$searchTerm%'";
  
    // Execute the SQL statement
    $result = mysqli_query($conn, $sql);
  
    // Check if any rows were returned
    if (mysqli_num_rows($result) > 0) {
        // Start the table HTML
        echo "<table>";
        
        // Output the table header row
        echo "<tr><th>Ticket Number</th><th>Username</th><th>Phone Number</th><th>Message</th><th>Status</th></tr>";
        
        // Loop through the rows and display the tickets in table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["ticket_number"] . "</td>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["phonenumber"] . "</td>";
            echo "<td>" . $row["message"] . "</td>";
            echo "<td>" . $row["status"] . "</td>";
            echo "</tr>";
        }
        
        // End the table HTML
        echo "</table>";
    } else {
        echo "No tickets found.";
    }
}
?>
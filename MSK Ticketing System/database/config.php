<?php
// Start the session
session_start();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Check if the "Exit" button was clicked
	if (isset($_POST['exit'])) {
    	header("Location: index.php");
    	exit();
	}

	// Get the form data
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Connect to the database
	$conn = mysqli_connect("localhost", "root", "", "ticketsystem");

	// Check if the connection was successful
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Prepare the SQL statement to retrieve the user with the given username and password
	$sql = "SELECT * FROM employee WHERE username='$username' AND password='$password'";

	// Execute the SQL statement
	$result = mysqli_query($conn, $sql);

	// Check if a row was returned
	if (mysqli_num_rows($result) == 1) {
		// Valid credentials, redirect to the homepage.php page
		$_SESSION["username"] = $username; // Store the username in a session variable
		header("Location: homepage.php");
		exit();
	} else {
		// Invalid credentials, display an error message
        $error = "Invalid login credentials. Please try again.";
        echo '<div class="center">' . $error . '</div>';
	}
}

?>

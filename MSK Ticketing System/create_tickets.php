<?php
require('./templates/enavigation.php');
require('./database/create_ticket_config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSK Consulting</title>
    <link rel="stylesheet" href="./style/css/create_ticket.css">
</head>
<body>
    <h2>Create Ticket</h2>
    <form action="create_ticket.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="phonenumber">Phone Number:</label>
    <input type="tel" id="phonenumber" name="phonenumber" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Submit Ticket</button>
</form>
</body>
</html>
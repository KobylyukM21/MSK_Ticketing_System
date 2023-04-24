<?php
require('./templates/enavigation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSK Consulting</title>
    <link rel="stylesheet" href="./style/css/search_tickets.css">
</head>
<body>
    <h2>Search Tickets</h2>
    <form action="search_tickets.php" method="POST">
        <label for="search">Search by:</label>
        <select name="searchBy" id="search">
            <option value="ticket_number">Ticket Number</option>
            <option value="username">Username</option>
            <option value="phonenumber">Phone Number</option>
        </select>
        <input type="text" name="searchTerm" placeholder="Enter search term">
        <button type="submit">Search</button>
    </form>
  </body>
  </html>
  <?php
  require('./database/search_tickets_config.php');
  ?>
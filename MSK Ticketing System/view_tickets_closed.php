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
    <link rel="stylesheet" href="./style/css/view_tickets.css">
</head>
<body>
    <div class="container">
        <h2>Your Closed Tickets</h2>
        <?php
        require('./database/view_tickets_config2.php');
        ?>
    </div>
    <h2>Edit Ticket Status</h2>
    <form method="post" action="">
        <label for="ticket-number">Ticket Number:</label>
        <input type="text" id="ticket-number" name="ticket_number" required><br><br>

        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Open">Open</option>
            <option value="Closed">Closed</option>
        </select><br><br>

        <input type="submit" value="Update Status" name="update">
    </form>
</body>
</html>
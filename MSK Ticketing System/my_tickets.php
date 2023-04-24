<?php
require('./templates/cnavigation.php');
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
        <h2>Your Open Tickets</h2>
        <?php
        require('./database/my_tickets_config.php');
        ?>
    </div>
</body>
</html>
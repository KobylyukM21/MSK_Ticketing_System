<?php
require('./database/config.php')
?>
<!DOCTYPE html>
<html>

<head>
	<title>Ticket System Login</title>
	<link rel="stylesheet" href="./style/css/login.css">
</head>

<body>
	<h2>Welcome MSK Employee | Please Login</h2>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" value="Login">
		<button type="submit" name="exit">Exit</button>
	</form>
</body>

</html>
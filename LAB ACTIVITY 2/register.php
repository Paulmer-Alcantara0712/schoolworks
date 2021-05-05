<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="layout1.css">
</head>
<body>
<form action="regis.php" method="POST">
		<h1>SIGNUP</h1>
		<?php if (isset($_GET['error'])) { ?>
			<p class="validation"><?php echo $_GET['error']; ?></p>
			<?php } ?> 
		<label>Username</label>
		<input type="text" name="username" placeholder="username">
		<!-- space -->
		<label>Password</label><br>
		<input type="password" name="password" placeholder="password">
		
		<!-- space -->
		<label>Confirm password</label>
		<input type="password" name="confirm" placeholder="confirm">
		<label>Email</label>
		<input type="text" name="email" placeholder="email">
		<button type="submit" name="button">register</button>	
	</form>
</body>
</html>
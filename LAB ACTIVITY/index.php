<?php 
session_start();

	include("connection.php");
	include("functions.php");
	
	$user_data = check_login($con);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Sample Website</title>
 </head>
 <body>

 	<a href="logout.php">Logout</a>
	<h1><center>This is the index page</center></h1>

	
	<br>
	<center>Hello, <?php echo $user_data['user_name']; ?></center>

 </body>
 </html>
<?php

	$username = $_POST['username'];
	$password = $_POST['password'];
	$con = new mysqli ("localhost","root","","tests");
	if($con -> connect_error){
		die("failed to connect :".$con -> connect_error);
	}else{
		$stmt = $con ->prepare("select * from users where username = ?");
		$stmt ->bind_param("s",$username);
		$stmt ->execute();
		$stmt_result = $stmt ->get_result();
	}
			if ($stmt_result->num_rows > 0){
				$data = $stmt_result -> fetch_assoc();
				if($data['password'] === $password){
					echo "<h1>Linkus Status</h1>";
				}else{
					echo "invalid password";
				}

			}else{
				echo "<h1>Invalid</h1>";
			}
?>
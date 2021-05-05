<?php

$server="localhost";
$aunmae="root";
$apassword = "";
$db_name = "tests";


$conn = mysqli_connect($server, $aunmae, $apassword, $db_name);
		
	
		$username=($_POST['username']);
		$password=($_POST['password']);
		$confirm=($_POST['confirm']);
		$email=($_POST['email']);
		$error = 'error';
		$sql_u = "SELECT * FROM users WHERE username='$username'";
  		$res_u = mysqli_query($conn, $sql_u);
  		$sql_e = "SELECT * FROM users WHERE email='$email'";
  		$res_u = mysqli_query($conn, $sql_u);
  		$res_e = mysqli_query($conn, $sql_e);
		
if(isset($_POST['button'])){

	if (empty($username)) {
		header("Location: register.php?error=User Name is required");
		
	} elseif (strlen($username) <5) {
		header("Location: register.php?error=Username must be atleast 5 characters.");
	
	}else if(mysqli_num_rows($res_u) > 0){
		header("Location: register.php?error=Username already exists");	
	
	}else if(empty($password)){
		header("Location: register.php?error=Password is required");

	}elseif (empty($password)) {
		header("Location: register.php?error=Password is required");
		
	}else if(empty($confirm)){
		header("Location: register.php?error=Confirming password is required");
		exit();
	}else if( !preg_match("#[0-9]+#", $password ) ) {
		header("Location: register.php?error=Password must include at least one number!");
		exit();
	}else if( !preg_match("#[a-z]+#", $password ) ) {
		header("Location: register.php?error=Password must include at least one letter!");
		exit();
	}else if( !preg_match("#[A-Z]+#", $password ) ) {
		header("Location: register.php?error=Password must include at least one capital letter!");
		exit();
	}else if( !preg_match("#\W+#", $password ) ) {
		header("Location: register.php?error=Password must include at least one symbol!");
		exit();

	}else if($_POST['password'] !== $_POST['confirm']) {
	header("Location: register.php?error=Password and Confirm password should match!");
	exit();
	}else if(empty($email)){
		header("Location: register.php?error=Email Address is required");
    	exit();
    }

	 else {		
	
		$query = "insert into users(username,password,email) values('$username','$password','$email')";
		
		$run = mysqli_query($conn,$query) or die(mysqli_error($conn));

		if($run){
			echo "LINKUS STATUS";
		}
		else{
			echo "LINKUS STATUS";
		}
	}
}


	
?>

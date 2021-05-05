<?php

	session_start();



	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

if(!isset($_SESSION["username"])){
	$_SESSION['msg'] = "You must log in first";
    header("location: welcome.php");}
  

  

    	if (isset($_GET['logout'])) {

    	$db = new mysqli('localhost', 'root', '', 'test4');
    	$event = mysqli_query($db, "INSERT INTO event_log(event_user, event_act, date) VALUES('".$_SESSION['username']."', 'Signed-Out', current_timestamp())");

    	if (isset($_SESSION['username'])) {
    		

    	session_destroy();
	  	unset($_SESSION['username']);
	  	header("location: index.php");
    	}
    	
    	}
   

   
	  
  
  


?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>

<style type="text/css">
	
body {

	background: url(hd10.jpg);
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
	font-family: Gadugi;


}



h1{

	color: white;
	background-color: tomato;
	border: 5px solid;
	border-radius: 7px;
	border-color: #18F710;
}


.content{

	width: 300px;
	height: auto;
	padding: 30px;
	background-color: white;
	margin-left: auto;
	margin-right: auto;
	border-radius: 10px;
	border: 5px solid;



}

.lorem{
	background-color: black;
	color: white;
	border-radius: 10px;
	width: 350px;
	padding: 20px;
	margin-right: auto;
	margin-left: auto;
	


}

a:hover {

	color: #18F710;
}
#slider{
            overflow: hidden;
        }
        #slider figure{
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            animation: 20s slider infinite;
        }
        #slider figure img{
            width: 20%;
            float: left;
        }
        
        @keyframes slider{
            0%{
                left: 0;
            }
            20%{
                left: 0;
            }
            25%{
                left: -100%;
            }
            45%{
                left: -100%;
            }
            50%{
                left: -200%;
            }
            70%{
                left: -200%;
            }
            75%{
                left: -300%;
            }
            95%{
                left: -300%;
            }
            100%{
                left: -400%;
            }
        }

</style>
<body>

<center>
	<h1>Hi User</h1>
</center>

<div class="content">

<?php if (isset($_SESSION['success'])): ?>

			<div class="error success">
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						?>
				</h3>			
			</div>
		<?php endif	?>

		   <?php  if (isset($_SESSION['username'])) : ?>
    	<center><p style="font-size: 20px;">Welcome ! <strong style="color: #17d60d; "><?php echo $_SESSION['username']; ?></strong></p></center>
      <br>
    <?php endif ?>

    	<p> <a href="welcome.php?logout='1'" style="color: red;" >logout</a> </p>
    	
       

</div>

<br><br>


<div class="lorem">
	<div class="header">
                <h1 style="font-family: Arial, Helvetica, sans-serif;"><strong>Image Slider: Albums and singles from famous artists</strong></h1>
            </div>
            <div id="slider">
                <figure>
                    <img src="piktyur/91LRpvTIeXL._SS500_.jpg" alt="">
                    <img src="piktyur/R-11322048-1514208854-5728.jpeg.jpg" alt="">
                    <img src="piktyur/R-8194723-1456917859-2319.png.jpg" alt="">
                    <img src="piktyur/wadab-pag-tumatagal-tumitibay-wea.jpg" alt="">
                    <img src="piktyur/91LRpvTIeXL._SS500_.jpg" alt="">
                </figure>
            </div>
</div>
	

</body>
</html>
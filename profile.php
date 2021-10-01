<?php
	
	session_start();
	

	if(isset($_SESSION["x"])){
	echo "Welcome  " .$_SESSION["x"];
		}
		else{
			//header("location:login.php");
			echo "Your session is not set";
		}


		if(isset($_COOKIE["country"])){
	echo "Your Country is " .$_COOKIE["country"];
		}
		else{
			//header("location:login.php");
			echo "Your session is not set";
		}
?>
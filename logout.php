<?php
		
		session_start();

		echo "You are logged out";
		session_unset();
		session_destroy();


		setcookie("country","",time()-100);


?>
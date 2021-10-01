<?php
	
	session_start();
	echo "Session Set";
	$_SESSION["x"] = "Umair";


	setcookie("country","Pakistan",time()+(86400 * 30));
	

?>
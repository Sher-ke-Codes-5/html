<?php
	//https://www.w3schools.com/php/php_mysql_connect.asp
	//echo $_POST["name"];

	echo "Name = " .$_POST["name"]. "<br/>";
	echo "Email = " .$_POST["email"]. "<br/>";


	$n = $_POST["name"];
	$e = $_POST["email"];
	$id = $_POST["id"];


	$con = new mysqli("localhost","root","","web");

	$q = "update mytable set name= '".$n."', email = '".$e."' where id =" .$id;

	echo $q;
 if($con->query($q)==TRUE){
 	//echo "Data inserted successfully";
 	header("location:index.php");

 }	else{

 	echo $con->error;
 	$con->close();
 }


?>
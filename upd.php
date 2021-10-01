<!DOCTYPE html>
<html>
<head>
	<title>Wad Lecture</title>


			
<?php
$con = new mysqli("localhost","root","","web");
 $q = "select * from mytable where id =".$_GET["id"];
 $rs = $con->query($q);
 $r = $rs->fetch_assoc();



 	?>

</head>
		
	


	<body>

		<form action="updateAction.php" method="POST">
			
	Enter your Name <br/>
	<input type="text" name="name"  value="<?php echo $r["name"]; ?>"> <br/>

		Enter your Email <br/>
	<input type="text" name="email"  value="<?php echo $r["email"]; ?>"> <br/>
	<input type="hidden" name="id" value="<?php echo $r["id"]; ?>">

			<input type="submit" value="submit kro">

		</form>

		
	</body>
</html>
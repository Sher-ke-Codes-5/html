<?php
echo "Name is = ".$_POST["name"]."<br>";
echo "Email is = ".$_POST['email']."<br>";
$var=$_POST["name"];
$var2=$_POST["email"];
$servername = "localhost";
$username = "root";
$password = "";
$database="practice";
$con =new mysqli($servername,$username,$password,$database,4306);
$q1=mysqli_query($con,"select * from qtable where email='$var2' ");
$c=mysqli_num_rows($q1);
if ($c==0)
{
    echo "welcome home";
    $q2="insert into qtable (name,email) values ('".$var."','".$var2."')";
}
?>

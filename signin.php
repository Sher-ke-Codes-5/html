<?php

echo "Name=" .$_POST["Name"];
echo "Email=" .$_POST["Email"];
$servername='localhost'; 
$username="root";
$database="practice";
$f=$_POST["Email"];

$con =new mysqli($servername,$username,$password,$database,4306);
$res=new mysqli($con,"select * from qtable where email='$f' ");
$c=mysqli_num_rows($res2);

if ($c==0)
{
  echo" welcome here ";
  $q="insert into qtable(Name,email)values('".$n."','".$f."')";
  echo $q;
if($con->query($q)==true)
{
   //echo"data inserted  succ ";
   header("location:p2.php");

}
else
{
  echo $con->error;
  $con->close();
}

}
else
{
  echo"enter again ";
  header("location:p1.php");

}





?>
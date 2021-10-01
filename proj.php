<?php

echo "Name=" .$_POST["Name"];
echo "Email=" .$_POST["Email"];

$n=$POST["Name"];
$servername='localhost'; 
$username="root";
$database="project";
$f=$_POST["Email"];
$password="";

$con =new mysqli($servername,$username,$password,$database,4306);
$res=new mysqli($con,"select * from qtable where email='$f' ");
$res2=mysqli_query($con,"Select * from qtable where email= '$f'");
$c=mysqli_num_rows($res2);

if ($c==0)
{
  echo" welcome here ";
  $q="insert into qtable(Name,email)values('".$n."','".$f."')";



echo"<table border=1 cellspacing=2>";
$y="select* from qtable";
if($con->query($q)==true)
{
   //echo"data inserted  succ ";

   $rs=$con->query($y);
   while($r=$rs->fetch_assoc())
   {
       echo"<tr>";
      
       echo"<td>".$r["Name"]."</td>";
       echo"<td>".$r["email"]."</td>";
    
   
   echo"</tr>";
   }
   echo"</table>";
   
   
   

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
  header("location:proj.html");

}
?>



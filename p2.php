

    

<?php
$con=new mysqli("localhost","root","","practice",4306);
echo"<table border=1 cellspacing=2>";
$q="select* from qtable";
//rs=result set
$rs=$con->query($q);
while($r=$rs->fetch_assoc())
{
    echo"<tr>";
   
    echo"<td>".$r["Name"]."</td>";
    echo"<td>".$r["email"]."</td>";
 

echo"</tr>";
}
echo"</table>";

?>










</body>

</html>
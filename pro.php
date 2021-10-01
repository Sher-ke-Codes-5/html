<?php


session_start();
if(isset($_SESSION["X"]))
{
echo "Welcome" .$_Session["X"];
}
else{
  
    echo " your expired session";
}
if (isset($_COOKIE["country"]))
{
    echo "your country is ".$_COOKIE["country"];
}
else
{
    echo" your seesion not set";
}

?>

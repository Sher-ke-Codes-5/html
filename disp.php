
<?php

$first = $_POST['first'];
$x = $_POST['first'];
$second= $_POST['second'];
if($_POST['group1'] == 'add') 
{
echo $first + $second;
}
else if($_POST['group1'] == 'subtract')
 {
echo $first - $second;
}
else if($_POST['group1'] == 'times') 
{
echo $first * $second;
} 
else if($_POST['group1'] == 'divide') 
{
echo $first / $second;
}

if($_POST["group1"]=="fac")
{  
    $fact = 1;  
    //getting value from input text box 'number'  
    $number = $_POST['first'];  
    echo "Factorial of $number:<br><br>";  
    //start loop  
    for ($i = 1; $i <= $number; $i++){         
        $fact = $fact * $i;  
        }  
        echo $fact . "<br>";  
}  




?>
<!DOCTYPE html>
<html>

        <title> Quiz 4 </title>
<body>
      
            <h2> Welcome Screen </h2>

               <?php
    if (isset($_POST["Sign"]))
    {
            switch($_POST["Sign"])
            {
                case 'SignIn':
                    header("location:p1.php");
                break;
                case 'SignUp':
                    header("location:signup.php");
                    break;
                default:
                break;

            }

    }
    ?>


   
        <form action="" method="Post">
        <input type="radio" name="Sign" value="SignIn" id="SignIn"> 
        <label for="SignIn">SignIn</label><br>
        <input type="radio" name="Sign" value="SignUp" id="SignUp">
        <label for="SignUp">SignUp</label><br><br>
        <input type="submit" value="Submit">
    </form>


   
</body>
</html>






   
</form>

</body>


</html>

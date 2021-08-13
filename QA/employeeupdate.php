<?php
   include("config.php");
   session_start();
    

if(isset($_POST['update']))
{ 


$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$telephone = $_POST['telephone'];


 $query = "UPDATE emp  SET  `name` = '$name', `password` = '$password',`mail` = '$mail',`telephone` = '$telephone' WHERE `username`= '$username'";


if(!mysqli_query($con,$query))
    {

        echo 'error editing new book';

    }
    else{   

          header("LOCATION: employee.html");
    }


  
}


?>
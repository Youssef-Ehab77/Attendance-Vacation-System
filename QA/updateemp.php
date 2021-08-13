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
$role = $_POST['role'];
$department = $_POST['department'];
$status = $_POST['status'];


 $query = "UPDATE emp  SET  `name` = '$name', `password` = '$password',`mail` = '$mail',`telephone` = '$telephone' ,  `department`= '$department' WHERE `username`= '$username'";


if(!mysqli_query($con,$query))
    {

        echo 'error editing new book';

    }
    else{   

          header("LOCATION: admin.html");
    }


  
}


?>
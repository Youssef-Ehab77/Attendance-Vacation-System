<?php
   include("config.php");
   session_start();
    

if(isset($_POST['update']))
{ 


$id = $_POST['id'];
$name = $_POST['name'];



 $query = "UPDATE department  SET  `name` = '$name' WHERE `id`= '$id'";


if(!mysqli_query($con,$query))
    {

        echo 'error editing new book';

    }
    else{   

          header("LOCATION: admin.html");
    }


  
}


?>
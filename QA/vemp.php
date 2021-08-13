<?php
	
   include("config.php");
   session_start();

   
	//$_SESSION['username'];


	


$view = " SELECT * FROM emp";
$viewres = mysqli_query($con,$view);

$view2 = " SELECT * FROM hod";
$view2res = mysqli_query($con,$view2);


?>



<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">

  <div class="form">
  	
   
   
   <form class="login-form" >


    <center><table style="width:70%">
                  

                <tr><th><center>Name</center></th>
                  <th><center>Username</center></th>
                  <th><center>Role</center></th>
                  <th><center>Department</center></th>

                   
    
      <?php


  while ($query2 = mysqli_fetch_array($view2res))
        {




$name2 = $query2['name'];
$username2 =  $query2['username'];
$role2 = $query2['role'];
$department2 =  $query2['department'];



            echo "

           
                <tr>
                    <td><center>$name2</center></td>
                    <td><center>$username2</center></td>
                    <td><center>$role2</center></td>
                    <td><center>$department2</center></td>


  
                    
                </tr>    
            ";
        }

                  while ($query = mysqli_fetch_array($viewres))
        {




$name = $query['name'];
$username =  $query['username'];
$role = $query['role'];
$department =  $query['department'];



            echo "

           
                <tr>
                    <td><center>$name</center></td>
                    <td><center>$username</center></td>
                    <td><center>$role</center></td>
                    <td><center>$department</center></td>


  
                    
                </tr>    
            ";
        }echo "</table>   </center>";
        echo"<br>";

                  ?>




      

            <center>  <p class="message"><a href="admin.html">Back</a></p></center>

    </form>

   



  </div>
</div>
</body>
</html>


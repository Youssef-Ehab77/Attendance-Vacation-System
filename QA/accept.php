<?php
	
   include("config.php");
   session_start();

   
	//$_SESSION['username'];


	


$admit = " SELECT * FROM sign";
$admitres = mysqli_query($con,$admit);



?>



<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">

  <div class="form">
  	
   
   
   <form class="login-form" action="add.php" method="post">


    <center><table style="width:70%">
                  

                <tr><th><center>Name</center></th>
                  <th><center>Username</center></th>
                  <th><center>Password</center></th>
                  <th><center>Mail</center></th>
                  <th><center>Telephone</center></th>

                   
    
      <?php



                  while ($query = mysqli_fetch_array($admitres))
        {




$name = $query['name'];
$username =  $query['username'];
$password = $query['password'];
$mail =  $query['mail'];
$telephone =  $query['telephone'];


            echo "

           
                <tr>
                    <td><center>$name</center></td>
                    <td><center>$username</center></td>
                    <td><center>$password</center></td>
                    <td><center>$mail</center></td>
                    <td><center>$telephone</center></td>

  
                    
                </tr>    
            ";
        }echo "</table>   </center>";
        echo"<br>";

                  ?>


 <input type="text" placeholder="Enter Username" name="adduser"/>








    <br>
      <button>Add</button>

            <center>  <p class="message"><a href="addnewemp.html">Back</a></p></center>

    </form>

   



  </div>
</div>
</body>
</html>


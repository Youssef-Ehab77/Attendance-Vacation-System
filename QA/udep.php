<?php
	
   include("config.php");
   session_start();

   
	//$_SESSION['username'];


	


$view = " SELECT * FROM department";
$viewres = mysqli_query($con,$view);



?>


<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="udepinfo.php" method="get">
       <center><table style="width:70%">
                  

                <tr><th><center>ID</center></th>
                  <th><center>Name</center></th>


                   
    
      <?php



                  while ($query = mysqli_fetch_array($viewres))
        {




$name = $query['name'];
$id =  $query['id'];




            echo "

           
                <tr>
                    <td><center>$id</center></td>
                    <td><center>$name</center></td>



  
                    
                </tr>    
            ";
        }echo "</table>   </center>";
        echo"<br>";

                  ?>







    <br>

      <input type="text" placeholder="Department ID" name="depid"/>
  
      

      <button>Find</button>
      <center>  <p class="message"><a href="admin.html">Back</a></p></center>
    </form>
  </div>
</div>
</body>
</html>
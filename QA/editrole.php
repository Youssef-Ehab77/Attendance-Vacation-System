<?php
	
   include("config.php");
   session_start();

   
	//$_SESSION['username'];


	


$emp = " SELECT * FROM emp";
$hod = " SELECT * FROM hod";
$empres = mysqli_query($con,$emp);
$hodres = mysqli_query($con,$hod);



?>



<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">

  <div class="form">
  	
   
   
   <form class="login-form" action="editrole2.php" method="post">


    <center><table style="width:70%">
                  

                <tr><th><center>Name</center></th>
                  <th><center>Username</center></th>
                  <th><center>Role</center></th>
                  <th><center>Department</center></th>

                </tr>


                   
    
      <?php



                  while ($query2 = mysqli_fetch_array($hodres))
        {




$hname = $query2['name'];
$husername =  $query2['username'];
$hrole = $query2['role'];
$hdep = $query2['department'];



            echo "

           
                <tr>
                    <td><center>$hname</center></td>
                    <td><center>$husername</center></td>
                    <td><center>$hrole</center></td>
                    <td><center>$hdep</center></td>
                    
                </tr>    
            ";
        }

  while ($query = mysqli_fetch_array($empres))
        {

$ename = $query['name'];
$eusername =  $query['username'];
$erole = $query['role'];
$edep = $query['department'];




            echo "

           
                <tr>
                    <td><center>$ename</center></td>
                    <td><center>$eusername</center></td>
                    <td><center>$erole</center></td>
                    <td><center>$edep</center></td>
        

  
                    
                </tr>    
            ";
        }


        echo "</table>   </center>";
        echo"<br>";

                  ?>


 <input type="text" placeholder="Enter Username" name="search"/>

 <select name="rolename">

  <option value="emp">Employee</option>
    <option value="hod">Head of Department</option>

 </select>








    <br>
      <button>Search</button>

            <center>  <p class="message"><a href="admin.html">Back</a></p></center>

    </form>

   



  </div>
</div>
</body>
</html>


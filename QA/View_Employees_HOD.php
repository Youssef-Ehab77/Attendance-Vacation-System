<?php
include("config.php");
session_start();
$departmentEmployees = " SELECT * FROM `emp` WHERE `department` = '" .$_SESSION['HOD_department'] . "'";
$sql = mysqli_query($con,$departmentEmployees);
?>

<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
  <div class="login-page">
    <div class="form">
     <form class="login-form" action="add.php" method="POST">
      <center><table style="width:70%">        
        <tr><th><center>Name</center></th>
          <th><center>Username</center></th>
          <th><center>Password</center></th>
          <th><center>Mail</center></th>
          <th><center>Telephone</center></th>

          <?php
          while ($query = mysqli_fetch_array($sql))
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
          }
          echo "</table>   </center>";
          echo"<br>";

          ?>

        </form>
        <form class="login-form" action="hod.html">
          <button>Back</button>
        </form>
      </div>
    </div>
  </body>
  </html>


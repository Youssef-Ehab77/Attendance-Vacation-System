<?php
include("config.php");
session_start();
	//$_SESSION['username'];
$admit = " SELECT * FROM `emp` WHERE `department` = '" .$_SESSION['HOD_department'] . "' and `status` = 'working'";
$admitres = mysqli_query($con,$admit);
?>

<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
  <div class="login-page">
    <div class="form">
     <form class="login-form" action="add.php" method="POST">
      <center><table style="width:100%">        
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


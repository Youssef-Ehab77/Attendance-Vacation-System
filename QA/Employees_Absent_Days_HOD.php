<?php
include("config.php");
session_start();
$sql = "SELECT e.name, e.username, e.department , SUM(r.days) as total_absent_days 
FROM emp e JOIN requests r 
on e.username = r.username 
WHERE r.department = '" .$_SESSION['HOD_department'] . "' AND r.status = 'Approved' 
GROUP BY e.username ";

$absent = mysqli_query($con,$sql);
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
          <th><center>department</center></th>
          <th><center>total</center></th>

          <?php
          while ($query = mysqli_fetch_array($absent))
          {
            $name = $query['name'];
            $username =  $query['username'];
            $department = $query['department'];
            $total =  $query['total_absent_days'];
            echo "
            <tr>
            <td><center>$name</center></td>
            <td><center>$username</center></td>
            <td><center>$department</center></td>
            <td><center>$total</center></td>
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


<?php	
   include("config.php");
   session_start();

   $_SESSION['empusername']; 

    $sql = "SELECT * FROM requests WHERE username ='" .$_SESSION['username']. "'";
	$empinfo = mysqli_query($con,$sql);
?>

<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
   <form class="login-form" >
    <center><table style="width:150%">
                <tr><th><center>ID</center></th>
                  <th><center>Username</center></th>
                  <th><center>Days</center></th>
                  <th><center>Reason</center></th>
                  <th><center>Status</center></th>
                  <th><center>Time</center></th>
    <?php
        while ($query = mysqli_fetch_array($empinfo))
        {
        $ID = $query['id'];
        $Username =  $query['username'];
        $Days = $query['days'];
        $Reason =  $query['Reason'];
        $Status =  $query['status'];
        $Time =  $query['time'];
            echo "
                <tr>
                    <td><center>$ID</center></td>
                    <td><center>$Username</center></td>
                    <td><center>$Days</center></td>
                    <td><center>$Reason</center></td>
                    <td><center>$Status</center></td>
                    <td><center>$Time</center></td>
                </tr>";
        }
        echo "</table>   </center>";
        echo"<br>";?>

<center>  <p class="message"><a href="employee.html">Back</a></p></center>

    </form>
  </div>
</div>
</body>
</html>


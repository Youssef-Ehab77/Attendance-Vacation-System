<?php
include("config.php");
session_start();
$requests = " SELECT id , username, days, Reason FROM `requests` 
WHERE `department` = '" .$_SESSION['HOD_department'] . "' AND status = 'not seen'";
$sql = mysqli_query($con,$requests);
?>

<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
  <div class="login-page">
    <div class="form">
     <form class="login-form" action="add.php" method="POST">
      <center><table style="width:110%">        
        <tr><th><center>ID</center></th>
          <th><center>Username</center></th>
          <th><center>Days</center></th>
          <th><center>Reason</center></th>
          <th><center>Approve</center></th>
          <th><center>Disapprove</center></th>

          <?php
          while ($query = mysqli_fetch_array($sql))
          {
            $id = $query['id'];
            $username =  $query['username'];
            $Days = $query['days'];
            $Reason =  $query['Reason'];
            ?>

            <tr>
              <td><center><?php echo "$id";  ?></center></td>
              <td><center><?php echo "$username" ?></center></td>
              <td><center><?php echo "$Days" ?></center></td>
              <td><center><?php echo "$Reason" ?></center></td>
              <td><a href="Reqeust_Approve.php?id=<?php echo $query['id'];?>&username=<?php echo $query['username'];?>">Accept</a></td>
              <td><a href="Request_Delete.php?id=<?php echo $query['id']; ?>">Decline</a></td>
            </tr>    
            <?php
          }
          ?>
        </table>   </center>
        <br>



      </form>
      <form class="login-form" action="hod.html">
        <button>Back</button>
      </form>
    </div>
  </div>
</body>
</html>


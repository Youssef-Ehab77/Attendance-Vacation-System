<?php


   include("config.php");
   session_start();



$_SESSION['name'];
$_SESSION['username'];
$_SESSION['password'];
$_SESSION['mail'];
$_SESSION['telephone'];
$_SESSION['department'];


?>




<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="updaterole.php" method="get">
     
  <input type="text" placeholder="Name" value= "<?php echo ($_SESSION['name']);?>" name="name"readonly/>
      <input type="text" placeholder="Username" value="<?php echo ($_SESSION['username']);?>" name="username" readonly/>
      

  <select placeholder="Role"  name="newrole" />

<option value ="emp"> Employee</option>
<option value ="hod"> Head of Department</option>


</select>




<br>

      <button name="update">Change Role</button>


                
      <center>  <p class="message"><a href="editrole.php">Back</a></p></center>


    </form>
  </div>
</div>
</body>
</html>
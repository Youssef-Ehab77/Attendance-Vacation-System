<?php


   include("config.php");
   session_start();


//$empuser = $_GET['empname'];


$update = "SELECT * FROM emp WHERE username ='" .$_GET['empname']. "'";


//$update = " SELECT * FROM emp WHERE 'username' = '$empuser'";

$updateres = mysqli_query($con,$update);

$query = mysqli_fetch_array($updateres);

$name = $query['name'];
$username = $query['username'];
$password = $query['password'];
$mail = $query['mail'];
$telephone = $query['telephone'];
$role = $query['role'];
$department = $query['department'];
$status = $query['status'];



$depselect= " SELECT * FROM department";

$depselectres = mysqli_query($con,$depselect);


?>




<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="updateemp.php" method="post">
     
  <input type="text" placeholder="Name" value= "<?php echo ($name);?>" name="name"/>
      <input type="text" placeholder="Username" value="<?php echo ($username);?>" name="username" readonly/>
      <input type="text" placeholder="Password" value="<?php echo ($password);?>" name="password" />
      <input type="email" placeholder="E-mail" value="<?php echo ($mail);?>" name="mail"/>
      <input type="tel" placeholder="Phone Number" value="<?php echo ($telephone);?>" name="telephone"/>

  <input type="text" placeholder="Role" value="<?php echo ($role);?>" name="role" readonly/>

<input type="text" placeholder="Department" value="<?php echo ($department);?>" readonly/>


  <select name="department" name="department">

<?php

while($query2 = mysqli_fetch_array($depselectres))
  {

echo"<option>";

echo $query2['name'];

echo"</option>";
}


?>

</select>

<?php

if ($status == 'working')

  {echo "<center > <div class='status1'> Working </div> <center>";}

else if ($status == 'not')

  {echo "<center > <div class='status2'> Not Working </div> <center>";}



?>



<br>

      <button name="update">Update</button>


                
      <center>  <p class="message"><a href="uemp.php">Back</a></p></center>


    </form>
  </div>
</div>
</body>
</html>
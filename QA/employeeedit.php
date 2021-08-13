<?php
   include("config.php");
   session_start();

$update = "SELECT * FROM emp WHERE username ='" .$_SESSION['username']. "'and password ='" .$_SESSION['password']."'";

$updateres = mysqli_query($con,$update);

$query = mysqli_fetch_array($updateres);

$name = $query['name'];
$username = $query['username'];
$password = $query['password'];
$mail = $query['mail'];
$telephone = $query['telephone'];

?>

<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="employeeupdate.php" method="post">
      <input type="text" placeholder="Name" value= "<?php echo ($name);?>" name="name"/>
      <input type="text" placeholder="Username" value="<?php echo ($username);?>" name="username" readonly/>
      <input type="text" placeholder="Password" value="<?php echo ($password);?>" name="password" />
      <input type="email" placeholder="E-mail" value="<?php echo ($mail);?>" name="mail"/>
      <input type="tel" placeholder="Phone Number" value="<?php echo ($telephone);?>" name="telephone"/>
<br>
      <button name="update">Update</button>
      <center>  <p class="message"><a href="employee.html">Back</a></p></center>
    </form>
  </div>
</div>
</body>
</html>
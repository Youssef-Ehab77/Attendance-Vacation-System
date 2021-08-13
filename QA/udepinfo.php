<?php


   include("config.php");
   session_start();


//$empuser = $_GET['empname'];


$update = "SELECT * FROM department WHERE id ='" .$_GET['depid']. "'";


//$update = " SELECT * FROM emp WHERE 'username' = '$empuser'";

$updateres = mysqli_query($con,$update);

$query = mysqli_fetch_array($updateres);

$id = $query['id'];
$name = $query['name'];


?>




<html>
<head>
  <link rel = "stylesheet" type = "text/css"  href = "css/home.css" />
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="login-form" action="updatedep.php" method="post">
     
  <input type="text" placeholder="ID" value= "<?php echo ($id);?>" name="id" readonly/>
      <input type="text" placeholder="Name" value="<?php echo ($name);?>" name="name" />
    



<br>

      <button name="update">Update</button>


                
      <center>  <p class="message"><a href="udep.php">Back</a></p></center>


    </form>
  </div>
</div>
</body>
</html>
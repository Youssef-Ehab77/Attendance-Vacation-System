<?php

include("config.php");

$id = $_GET['id']; 
$sql = "UPDATE `requests` SET `status`='not approved', `Deleted`= 1  WHERE id = $id"   ;

$del = mysqli_query($con,$sql);

if($del)
{
    mysqli_close($con); // Close connection
    header("location:Early_Leave_Request.php"); 
    exit;	
}
else
{
    echo "Error deleting record"; 
}
?>
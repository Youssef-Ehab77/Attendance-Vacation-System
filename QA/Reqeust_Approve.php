<?php

include("config.php");

$id = $_GET['id']; 
$sql = "UPDATE `requests` SET `status`='approved', `Deleted`= 1  WHERE id = $id"   ;
$del = mysqli_query($con,$sql);

$username = $_GET['username'];
$sqlChangeEmpStatus = "UPDATE `emp` SET `status`= 'not' WHERE username = '$username' ";
$statusUpdate = mysqli_query($con,$sqlChangeEmpStatus);

if($del)
{
    mysqli_close($con); // Close connection
    header("location:Early_Leave_Request.php"); 
    exit;	
}
else
{
    echo "Error accepting record"; 
}
?>
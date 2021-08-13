<?php
   include("config.php");
   session_start();



$_SESSION['name'];
$_SESSION['username'];
$_SESSION['password'];
$_SESSION['mail'];
$_SESSION['telephone'];
$_SESSION['department'];
$_SESSION['rolename'];


if($_SESSION['rolename'] == "emp" && $_GET['newrole'] == "hod") 
{

$sqlinsert = "INSERT into hod (name, username, password, mail, telephone,department) 
VALUES ('".$_SESSION['name']."','".$_SESSION['username']."','".$_SESSION['password']."','".$_SESSION['mail']."','".$_SESSION['telephone']."','".$_SESSION['department']."')";

$sqldelete = "DELETE FROM emp WHERE username ='" .$_SESSION['username']. "'";

}
else if($_SESSION['rolename'] == "hod" && $_GET['newrole'] == "emp") 
{

$sqlinsert = "INSERT into emp (name, username, password, mail, telephone,department) 
VALUES ('".$_SESSION['name']."','".$_SESSION['username']."','".$_SESSION['password']."','".$_SESSION['mail']."','".$_SESSION['telephone']."','".$_SESSION['department']."')";

$sqldelete = "DELETE FROM hod WHERE username ='" .$_SESSION['username']. "'";


}


if (!mysqli_query($con,$sqlinsert) or !mysqli_query($con,$sqldelete))
{
	header("Location:editrole.php");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:admin.html");
	exit();
}


 



?>
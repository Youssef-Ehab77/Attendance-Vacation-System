<?PHP
include('config.php');

session_start();

$_SESSION['adduser'];
$_SESSION['name'];
$_SESSION['username'];
$_SESSION['password'];
$_SESSION['mail'];
$_SESSION['telephone'];



$sqlinsert = "INSERT into emp (name, username, password, mail, telephone) 
VALUES ('".$_SESSION['name']."','".$_SESSION['username']."','".$_SESSION['password']."','".$_SESSION['mail']."','".$_SESSION['telephone']."')";

$sqldelete = "DELETE FROM sign WHERE username ='" .$_SESSION['username']. "'";




if (!mysqli_query($con,$sqlinsert) or !mysqli_query($con,$sqldelete))
{
	header("Location:accept.php");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:admin.html");
	exit();
}

?>
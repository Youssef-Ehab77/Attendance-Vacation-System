<?PHP
include('config.php');

session_start();

$_SESSION['search'] = $_POST['search'];
$_SESSION['rolename'] = $_POST['rolename'];


if($_SESSION['rolename'] == "emp")
{

$emp = " SELECT * FROM emp WHERE username ='" .$_SESSION['search']. "'";
$empres = mysqli_query($con,$emp);
$empquery = mysqli_fetch_array($empres);

$_SESSION['name'] = $empquery['name'];
$_SESSION['username'] =  $empquery['username'];
$_SESSION['password'] = $empquery['password'];
$_SESSION['mail'] =  $empquery['mail'];
$_SESSION['telephone'] =  $empquery['telephone'];
$_SESSION['department'] =  $empquery['department'];




}


else if($_SESSION['rolename'] == "hod")
{

$emp = " SELECT * FROM hod WHERE username ='" .$_SESSION['search']. "'";
$empres = mysqli_query($con,$emp);
$empquery = mysqli_fetch_array($empres);

$_SESSION['name'] = $empquery['name'];
$_SESSION['username'] =  $empquery['username'];
$_SESSION['password'] = $empquery['password'];
$_SESSION['mail'] =  $empquery['mail'];
$_SESSION['telephone'] =  $empquery['telephone'];
$_SESSION['department'] =  $empquery['department'];




}



if (!mysqli_query($con,$emp) and !mysqli_query($con,$hod))


{
	header("Location:editrole.php");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:editrole3.php");
	exit();
}
?>
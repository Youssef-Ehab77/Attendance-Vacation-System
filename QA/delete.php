<?PHP
include('config.php');



$sql = "delete from emp WHERE username = '".$_POST['deluser']."'";

if (!mysqli_query($con,$sql))
{
	header("Location:demp.php");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Deleted";
	header("Location:admin.html");
	exit();
}
?>
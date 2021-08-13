<?PHP
include('config.php');



$sql = "delete from department WHERE name = '".$_POST['name']."'";

if (!mysqli_query($con,$sql))
{
	header("Location:ddepartment.html");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:admin.html");
	exit();
}
?>
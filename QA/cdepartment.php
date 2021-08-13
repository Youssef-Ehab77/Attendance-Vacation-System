<?PHP
include('config.php');

$sql = "insert into department (name) 
VALUES ('$_POST[name]')";

if (!mysqli_query($con,$sql))
{
	header("Location:cdepartment.html");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:admin.html");
	exit();
}
?>
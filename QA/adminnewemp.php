<?PHP
include('config.php');

$sql = "insert into emp (name, username, password, mail, telephone) 
VALUES ('$_POST[name]','$_POST[username]','$_POST[password]','$_POST[mail]','$_POST[telephone]')";

if (!mysqli_query($con,$sql))
{
	header("Location:adminnewemp.html");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:admin.html");
	exit();
}
?>
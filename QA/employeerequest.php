<?PHP
include('config.php');
session_start();

$_SESSION['empusername'];
$days = $_POST['numday'];
$reason = $_POST['reqreason'];
$_SESSION['empdepartment'];
$_SESSION['time'] = date('y-m-d h:i:s');

$sql = "INSERT INTO `requests`(`username`, `department`, `days`, `Reason`, `time`) 
VALUES ('" .$_SESSION['empusername']. "','".$_SESSION['empdepartment']."', $days , '$reason', '" .$_SESSION['time']. "')";

if (!(mysqli_query($con,$sql)))
{
	header("Location:employeerequest.html");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}
else
{
	echo "1 Row Added";
	header("Location:employee.html");
	exit();
}
?>
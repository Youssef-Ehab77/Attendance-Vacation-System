<?PHP
include('config.php');
session_start();

$_SESSION['empname'];
$_SESSION['empusername'];
$_SESSION['clockin'];
$_SESSION['clockout'] = date('y-m-d h:i:s');

$clockoutsql = "UPDATE `emplog` SET Clock_out = '" .$_SESSION['clockout']. "' where Clock_in ='" .$_SESSION['clockin']. "'" ;



if (!(mysqli_query($con,$clockoutsql)))
{
	header("Location:empclockin.php");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}
else
{
	echo "1 Row Added";
	header("Location:employee.html");
	exit();
}
?>
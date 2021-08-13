<?PHP
include('config.php');
session_start();

$_SESSION['empname'];
$_SESSION['empusername'];
$_SESSION['clockin'] = date('y-m-d h:i:s');


$clockinsql = "INSERT INTO `emplog`(`name`, `username`, `Clock_in`) 
VALUES ('" .$_SESSION['empname']. "', '" .$_SESSION['empusername']. "', '" .$_SESSION['clockin']. "')";

if (!(mysqli_query($con,$clockinsql)))
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
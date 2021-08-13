<?PHP
include('config.php');

session_start();

$_SESSION['adduser'] = $_POST['adduser'];

$add = " SELECT * FROM sign WHERE username ='" .$_SESSION['adduser']. "'";
$admitres = mysqli_query($con,$add);
$query = mysqli_fetch_array($admitres);


$_SESSION['name'] = $query['name'];
$_SESSION['username'] =  $query['username'];
$_SESSION['password'] = $query['password'];
$_SESSION['mail'] =  $query['mail'];
$_SESSION['telephone'] =  $query['telephone'];






if (!mysqli_query($con,$add))


{
	header("Location:accept.php");
	echo "Couldn't Insert Try change ID".mysqli_error($con);
}else
{
	echo "1 Row Added";
	header("Location:add2.php");
	exit();
}
?>
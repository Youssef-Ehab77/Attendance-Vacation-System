<?php
   include("config.php");
   session_start();
      // username and password sent from form 
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['password'] = $_POST['password'];

	 $admin = "SELECT username, password FROM admin WHERE username ='" .$_SESSION['username']. "'and password ='" .$_SESSION['password']."'";
	 $hod = "SELECT username, password FROM hod WHERE username ='" .$_SESSION['username']. "'and password ='" .$_SESSION['password']."'";
	 $emp = "SELECT username, password FROM emp WHERE username ='" .$_SESSION['username']. "'and password ='" .$_SESSION['password']."'";

	  $adminres = mysqli_query($con,$admin);
	  $hodres = mysqli_query($con,$hod);
	  $empres = mysqli_query($con,$emp);

	if (mysqli_fetch_assoc($adminres))
	{
	
		header("Location:admin.html");
		exit();
		
	}
	else if (mysqli_fetch_assoc($hodres))
	{
	

	$sql = "SELECT * FROM hod WHERE username ='" .$_SESSION['username']. "'and password ='" .$_SESSION['password']."'";
	$hod_department = mysqli_query($con,$sql);
	$query = mysqli_fetch_array($hod_department);
	$department = $query['department'];
	$_SESSION['HOD_department'] = $department;
	header("Location:hod.html");
	exit();
	
		header("Location:hod.html");
		exit();
		
	}

	else if (mysqli_fetch_assoc($empres))
	{
	
	$sql = "SELECT * FROM emp WHERE username ='" .$_SESSION['username']. "'and password ='" .$_SESSION['password']."'";
		$empinfo = mysqli_query($con,$sql);
		$query = mysqli_fetch_array($empinfo);
		$empname = $query['name'];
		$empusername = $query['username'];
		$empdepartment = $query['department'];
		$_SESSION['empname'] = $empname;
		$_SESSION['empusername'] = $empusername;
		$_SESSION['empdepartment'] = $empdepartment;
		header("Location:employee.html");
		exit();
		
	}

	else header("Location:error.html");


		
?>
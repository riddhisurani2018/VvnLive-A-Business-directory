<?php

include('include_db.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['password2'];
$cno=$_POST['cno'];


	$sql="INSERT into reviewdetail (firstname,lastname,cno,email,password) VALUES('$fname','$lname',$cno,'$email','$pass')";
	//$result = mysqli_query($con,$sql);
	if (mysqli_query($con,$sql)) 
	{
		$_SESSION['registered']="true";
		echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";		
	} 
	


?>
<?php
include 'include_db.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
//$pass=$_POST['password2'];
$cno=$_POST['cno'];
$rid=$_POST['reviewid'];

	$sql="UPDATE reviewdetail SET firstname='$fname',lastname='$lname',email='$email',cno='$cno' WHERE reviewid='$rid'";
	//$result = mysqli_query($con,$sql);
	if (mysqli_query($con,$sql)) 
	{
	
		echo "<script type='text/javascript'> window.location='coupondashboard.php'</script>";		
	} 
	


?>
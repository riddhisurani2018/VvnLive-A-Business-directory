<?php
include('include_db.php');
$semail = mysqli_real_escape_string($con,$_POST['semail']);  
$smobile = mysqli_real_escape_string($con,$_POST['smobile']);

$sql="Insert into subscribedetail (semail,smobile) values ('$semail','$smobile')";
$result=mysqli_query($con,$sql);
if ($result) 
	{
		$_SESSION['subscribed']="true";
		echo "<script type='text/javascript'> window.location='index.php'</script>";		
	} 
?>
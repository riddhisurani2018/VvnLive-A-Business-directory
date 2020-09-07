<?php
include('include_db.php');
$db=$_GET['form'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$plan=$_POST['plan'];

$sql="INSERT INTO ".$db." (firstname,lastname,cno,email,plan) VALUES ('$fname','$lname','$cno','$email','$plan')";
if (mysqli_query($con,$sql)) 
	{
		
		echo "<script type='text/javascript'> window.location='index.php'</script>";		
	}


?>
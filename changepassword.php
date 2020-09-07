<?php
include 'include_db.php';
$new=$_POST['newp'];
$rid=$_POST['reviewid'];

	$sql="UPDATE reviewdetail SET password='$new' WHERE reviewid='$rid'";
	//$result = mysqli_query($con,$sql);
	if (mysqli_query($con,$sql)) 
	{
		$_SESSION['updated']=1;
		echo "<script type='text/javascript'> window.location='coupondashboard.php'</script>";		
	} 
	


?>
<?php
 include('include_db.php');
$semail = mysqli_real_escape_string($con,$_POST['semail']);  
$categoryid = mysqli_real_escape_string($con,$_POST['categoryid']);  
//$semail=$_GET['semail'];
			//query
			$sql1=mysqli_query($con,"INSERT INTO subscribedetail(semail,categoryid,onlinestoreid) VALUES ('$semail','$categoryid',0)");
			if($sql1>0){
				echo 1;
				}
				else				
				{
					echo 0;
				}
			  
			
?>
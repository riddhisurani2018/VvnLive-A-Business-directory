<?php
 include('include_db.php');
$id = mysqli_real_escape_string($con,$_POST['id']);  

			$sql1=mysqli_query($con,"UPDATE coupondetail SET totaluses = totaluses + 1 WHERE couponid = '$id'");
			if($sql1>0){
				echo 1;
				}
				else				
				{
					echo 0;
				}
			  
			
?>
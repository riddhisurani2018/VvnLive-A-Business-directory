<?php
include('include_db.php');
$email=$_GET['email'];  
$query="SELECT * FROM reviewdetail WHERE email = '$email'";  
$result=mysqli_query($con,$query);  
if(mysqli_num_rows($result) > 0)
{    
	echo 1;  
}
else
{     
	echo 0;  
}  
?>
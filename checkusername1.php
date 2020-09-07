<?php
include('include_db.php');
$username1 = mysqli_real_escape_string($con,$_POST['username1']); 
//$username1="rushit";
$query="SELECT * FROM vendordetail WHERE username = '$username1'";  
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
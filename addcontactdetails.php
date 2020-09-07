<?php
 include('include_db.php');
$firstname = $_POST['name'];    
$email=$_POST['email'];  
$subject=$_POST['subject'];  
$message=$_POST['message']; 
$cno=$_POST['cno']; 

				$query = mysqli_query($con,"INSERT INTO contactus (name,email,subject,cno,message) VALUES('$firstname','$email','$subject','$cno','$message')") or die(mysqli_error($con));
					if($query)
					{
						
						//$to = $email;
						$_SESSION['contactus'] = "Thank You!!! Successfully Send";
						header('Location:contactus.php');
					}
					
	
?>
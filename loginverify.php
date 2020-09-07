<?php

include('include_db.php');
if(isset($_POST['username1']) && isset($_POST['password1']))
{	
	//$uname=$_POST['username1'];
	//$upass=$_POST['password1'];
	$uname = mysqli_real_escape_string($con,$_POST['username1']);
	$upass = mysqli_real_escape_string($con,$_POST['password1']);
	$sql="SELECT * from reviewdetail where email='$uname' AND password='$upass'";
	$result = mysqli_query($con,$sql);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			while($row=mysqli_fetch_array($result))
			{
				$_SESSION['couponlogin']=1;
				$_SESSION['reviewid']=$row['reviewid'];
				$_SESSION['firstname']=$row['firstname'];
				$_SESSION['email']=$uname;
				if(isset($_GET['businessid']))
				{
					$bid=$_GET['businessid'];
					header("Location:localcouponcategory.php?businessid=".$bid);
					
					//echo "<script type='text/javascript'> window.location='localcouponcategory.php'</script>";	
				}
				else
				{ 
						echo "<script type='text/javascript'> window.location='couponspage.php'</script>";		
					 
				}
			}
		}	
		else
		{
			$_SESSION['failed'] = "Invalid Username or Password";
			echo "<script type='text/javascript'> window.location='couponlogin.php'</script>";			
		}
		
}
?>
<?php
// session_start();
 include('include_db.php');
//$con= new mysqli("localhost","root","","vvnlive") or die("cannot connect");
$username = mysqli_real_escape_string($con,$_POST['username']);  
$password=mysqli_real_escape_string($con,$_POST['password']);  
			//query
			$sql=mysqli_query($con,"SELECT username,password FROM vendordetail WHERE username='$username' AND password='$password'");
			//$sql1=mysqli_query($con,"SELECT username,password FROM vendordetail WHERE password=pass");
			if(mysqli_num_rows($sql)>0){
				echo 1;
				$_SESSION['username']=$username;
				}
/*			while($rs=mysqli_fetch_array($sql)){
				if($rs['username']==$username && $rs['password']==$password)
				{
					echo 1;
				}			
*/				else				
				{
					echo 0;
				}
			  
			
?>
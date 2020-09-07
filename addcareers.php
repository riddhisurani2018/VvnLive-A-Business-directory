<?php
 include('include_db.php');
$fullname = $_POST['fullname'];  
$telephone=$_POST['telephone'];  
$email=$_POST['email'];  
$institution=$_POST['institution'];  
$keyskils=$_POST['keyskils'];
$qual=$_POST['qual'];
$designation=$_POST['designation'];  
$ext=".pdf";				
	
	$q1=mysqli_query($con,"SELECT max(careersid) AS id FROM `careers`");
	while($row=mysqli_fetch_array($q1))
	{
		$id=$row['id'];
		$id=$id+1;
	}
	if(isset($_FILES["file"]["type"]))
	{
		$validextensions = array("pdf");
		$temporary = explode(".", $_FILES["file"]["name"]);
		$file_extension = end($temporary);
		if (($_FILES["file"]["type"] == "application/pdf")
		 && ($_FILES["file"]["size"] < 1000000)//Approx. 100kb files can be uploaded.
		&& in_array($file_extension, $validextensions))
		{
			if ($_FILES["file"]["error"] > 0)
			{
			echo "Return Code: " . $_FILES["file"]["error"] . "<br/><br/>";
			}
			else
			{
			$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
			$targetPath = "resume/".$id.$ext;
			$resumepath = $id.$ext;
			move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			
			$query = mysqli_query($con,"INSERT INTO careers (fullname,designation,email,institution,keyskills,qualification,phone,resumepath) VALUES('$fullname','$designation','$email','$institution','$keyskils','$qual','$telephone','$resumepath')") or die(mysqli_error($con));
			if($query)
					{
						
						//$to = $email;
						$_SESSION['careers'] = "Thank You!!! Successfully Received Your Request";
						header('Location:careers.php');
					}
			}
		}
		else
		{
//		echo "<span id='invalid'>***Invalid file Size or Type***<span>";
		$_SESSION['error']="Please select a pdf file with size less than 1MB";
		header('Location: careers.php');
		}
	}				
	
?>
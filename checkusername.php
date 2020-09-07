<?php
 include('include_db.php');
$username1 = $_POST['username1'];  
$password1=$_POST['password1'];  
//$cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);  
$firstname=$_POST['firstname'];  
$lastname=$_POST['lastname'];  
$email=$_POST['email'];  
$group1=$_POST['group1'];  
$phone=$_POST['phone'];  
			//query
			
				$query = mysqli_query($con,"INSERT INTO vendordetail (firstname,lastname,username,password,vendoremail,gender,vendorcno,pincode,birthdate) VALUES('$firstname','$lastname','$username1','$password1','$email','$group1','$phone',388120,2016-02-03)") or die(mysqli_error($con));
					if($query)
					{
						
						//$to = $email;
						$_SESSION['vendorregistered'] = "Successfully Registered";
						//$txt = "Thank You for sign up with vvnlive";
						//$headers = "From: team@vvnlive.co.in" . "\r\n";
						//mail($to,$subject,$txt,$headers);
						header('Location:index.php');
					}
					
	
?>
<?php


require("class.phpmailer.php");


$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = "webmail.vvnlive.co.in";                 // Specify main and backup server
//$mail->Host = "Give IP Address";                 // If the above does not work.
$mail->Port = 25;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "team@vvnlive.co.in";                // SMTP username
$mail->Password = "dbRvi5L415";                  // SMTP password
//$mail->SMTPSecure = "ssl";                            // Enable encryption, 'ssl' also accepted

$mail->From = 'team@vvnlive.co.in';
$mail->FromName = 'Team VVNLive ';
$mail->AddAddress($email);  // Add a recipient

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Thank You';
$mail->Body    = '<strong>Thank you</strong> You have been successfully registered to VVnlive as a vendor';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
	print_r($mail);
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';
exit(0);?>

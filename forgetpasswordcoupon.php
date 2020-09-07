<?php
include('include_db.php');
require("class.phpmailer.php");

$email = mysqli_real_escape_string($con,$_POST['email']);  


			$sql=mysqli_query($con,"SELECT password,email,firstname FROM reviewdetail WHERE email='$email'");
			if(mysqli_num_rows($sql)>0){

				while($row=mysqli_fetch_array($sql))
				{
					$email=$row['email'];
					$password=$row['password'];
					$firstname=$row['firstname'];
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

					$mail->Subject = 'VVNLive Coupon Password';
					$mail->Body    = 'Hello '.$firstname.',<br/><br/><br/> Your Password For VVNLive Profile is <strong>'.$password.'</strong> . Please keep it safe with you for further use. <br/> Keep enjoying @VVNLive. '.'<br/> <br/> <strong>Thank You <br/>VVNLive Team</strong>';
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					if(!$mail->Send()) {
						print_r($mail);
					   echo 'Message could not be sent.';
					   echo 'Mailer Error: ' . $mail->ErrorInfo;
					   exit;
					}

//					echo 'Message has been sent';
					echo 1;
					exit(0);
				}
				}
				else
				{
					echo 0;					
				}


				
?>
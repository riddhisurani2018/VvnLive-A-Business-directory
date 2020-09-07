<?php
include('include_db.php');
require("class.phpmailer.php");

$couponid = mysqli_real_escape_string($con,$_GET['couponid']);  
$email = $_GET['clientemail'];
$storeid = $_GET['storeid']; 
//echo $storeid;   

			$sql=mysqli_query($con,"SELECT * FROM onlinecoupon WHERE couponid='$couponid'");
			if(mysqli_num_rows($sql)>0){

				while($row=mysqli_fetch_array($sql))
				{
					$title=$row['title'];
					$desc=$row['description'];
					$vouchercode=$row['vouchercode'];
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

					$mail->Subject = 'VVNLive Coupon Details';
					$mail->Body    = 'Hello VVNLive User,<br/><br/><br/> Your Coupon Details are as follow: <br/><br/> <strong>Coupon Title :</strong>'.$title.'<br/>'.'<strong>Coupon Code :</strong> '.$vouchercode.'<br/>'.'<strong>Coupon Description :</strong> '.$desc.'<br/><br/><strong>Thank You<br/>VVNLive Team</strong>';
					$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

					if(!$mail->Send()) {
						print_r($mail);
					   echo 'Message could not be sent.';
					   echo 'Mailer Error: ' . $mail->ErrorInfo;
					   exit;
					}
					
					echo '<script>alert("Please Check You Email.Thank You.");</script>';
					echo "<script type='text/javascript'> window.location='onlinecouponcategory.php?storeid=".$storeid."'</script>";		
//					echo 'Message has been sent';
					//echo 1;
					exit(0);
				}
				}
				else
				{
					echo 0;					
				}


				
?>
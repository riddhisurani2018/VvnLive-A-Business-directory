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
$mail->AddAddress('pkrathod1994@gmail.com');  // Add a recipient

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

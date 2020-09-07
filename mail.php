<?php
$to = "pkrathod1994@gmail.com";
$subject = "My subject";
$txt = "Hello!!!!";
$headers = "From: team@vvnlive.co.in" . "\r\n" .

mail($to,$subject,$txt,$headers);
echo "done";
?>
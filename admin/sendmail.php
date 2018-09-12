<?php
function Send_Mail($to,$subject,$body)
{
require 'PHPmailer/class.phpmailer.php';
$from = "dm.davidmunene@gmail.com";
$mail = new PHPMailer();
$mail->IsSMTP(true); // SMTP
$mail->SMTPAuth   = true;  // SMTP authentication
$mail->Host= "smtp.gmail.com";
$mail->SMTPSecure = 'tls';
$mail->Username = "dm.davidmunene@gmail.com";  // SMTP  Username
$mail->Password = "!@3-vida$";  // SMTP Password
$mail->SetFrom($from, 'LLC Admin Support');
$mail->AddReplyTo($from,'Admin Technical Support');
$mail->Subject = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
if(!$mail->Send())
return false;
else
return true;
}
?>

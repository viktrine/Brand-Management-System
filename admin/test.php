<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');

?>

<?php
require 'sendmail.php';
$to = "davidmunene@live.com";
$subject = "Test Mail Subject";
$body = "Hi
Email service is working
Techoism"; // HTML  tags
Send_Mail($to,$subject,$body);
?>


<?php
require 'sendmail.php';
$to = "$_POST['em']";
$subject = "LLC Registration Details";
$body = "Hi $_POST['fn']
Kindly use the following details to sign up to our E-learning System
Registration Number:$_POST['un']
Firstname:$_POST['fn']
Lastname:$_POST['ln']
Class:$_POST['em']

Techoism"; // HTML  tags
Send_Mail($to,$subject,$body);
?>
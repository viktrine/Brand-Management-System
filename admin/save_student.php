<?php
include('dbcon.php');
        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $em = $_POST['em'];
               $class_id = $_POST['class_id'];

             
               mysql_query("insert into student (username,firstname,lastname,email,location,class_id,status)
		values ('$un','$fn','$ln','$em','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered')                                    
		") or die(mysql_error()); 

require 'sendmail.php';
$to = $em;
$subject = "LLC Registration Details";
$body = "Dear $fn $ln ; <br> <br> 
Kindly use the following details to sigup in respect to the LPIC 1 Linux System and Network
Administration training; <br>

Registration Number: <b> $un  </b><br>
Firstname:<b> $fn </b>  <br>
Lastname:<b>  $ln </b>  <br> <br>

Yours Sincerely, <br> <br>

David Munene, <br>
Admin Support, <br>
Linux Learning Centre Ltd, <br>
Phone: +254 723 008 206 "; 

Send_Mail($to,$subject,$body);
		?>
		<?php
?>


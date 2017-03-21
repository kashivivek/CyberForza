<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$message = $_POST['message'];
$position_name=$_POST['position_name'];
$file_name = $_POST['file_name'];
$email_from = "$visitor_email";//<== update the email address
$email_subject = "New Job Application for $position_name from $name";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team,\n \n New New Job Application from following candidate: \n \n Name: $name, \n Phone: $visitor_phone \n Position: $position_name \n \n Resume: \n $message \n ".
		"\n Thanks,\n CyberForza Team.";

$to = "info@cyberforza.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header('Location: landingpage.html');
?>
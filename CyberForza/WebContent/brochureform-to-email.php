<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$title = $_POST['title'];
$level_job =  $_POST['level_job'];
$company =  $_POST['company'];
$challenges = $_POST['message'];

$email_from = "$visitor_email";//<== update the email address
$email_subject = "Brochure request from $name";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \nYou have received a new brochure request from the user $name, title $title, Level of the job $level_job, phone number $visitor_phone from company: $company \n".
		"Here is the message:\n $challenges\n \n Thanks,\n CyberForza Team.";

$to = "info@cyberforza.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: BrochureViewer.html');

?>
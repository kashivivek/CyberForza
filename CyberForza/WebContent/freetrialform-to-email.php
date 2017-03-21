<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$message = $_POST['message'];
$company = $_POST['company'];
$defence_interest = $_POST['optradio'];
$project_timeline = $_POST['project_timeline'];


$email_from = "$visitor_email";//<== update the email address
$email_subject = "Free Trial Request from $name";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \n You have received a new Free Trial Request from the user $name, phone number: $visitor_phone from company: $company \n Defence of Interest: $defence_interest \n Project Time Line: $project_timeline\n".
		"Here are the Objectives:\n $message \n \n Thanks,\n CyberForza Team.";

$to = "kashivivek@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: landingpage.html');

?>
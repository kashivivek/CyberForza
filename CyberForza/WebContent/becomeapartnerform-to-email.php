<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$message = $_POST['message'];
$company = $_POST['company'];
$defence_interest = $_POST['optradio'];



$email_from = "$visitor_email";//<== update the email address
$email_subject = "Become a Parner Request from $name";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, \n \n You have received a new Become a Partner Request from the user $name, phone number: $visitor_phone from company: $company \n Defence of Interest: $defence_interest \n\n".
		"Here are the Objectives:\n $message \n \n Thanks,\n CyberForza Team.";

$to = "info@cyberforza.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: landingpage.html');

?>
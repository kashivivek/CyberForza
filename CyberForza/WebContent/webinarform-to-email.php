<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$visitor_phone = $_POST['phone'];
$title = $_POST['title'];
$level_job =  $_POST['level_job'];
$company =  $_POST['company'];
$current_solution =  $_POST['current_solution'];
$challenges = $_POST['message'];

$email_from = "$visitor_email";//<== update the email address
$email_subject = "Webinar Registration request from $name";
$email_subject_confirmation = "Webinar Registration Confirmation";
$sucessMessage = "Your Request has been submitted";
$email_body = "Hi Team, <br> <br>You have received a Webinar Registration request from the $name working as a $title, $level_job employee in $company. <br>Phone number: $visitor_phone <br>".
		"Current solution followed :<br>$current_solution <br>Challenges facing: <br>$challenges <br><br>Thanks,<br>CyberForza Team.";
$email_body_confirmation = "Hi $name, <br><br>Thank you for Registering for the Webinar. Please find the details below: <br> <br> Cyber Forza Webinar: The Intelligent Defense Against Cyber Attacks<br>
When:Tue, Apr 4, 12:00 pm  (1 hr)San Francisco (Pacific Daylight Time, GMT-07:00)<br>
Where:WebEx Online<br>
Host:Phillip Hadreas<br><br><a href='https://meetings.webex.com/collabs/#/meetings/detail?uuid=MCQLZV9WVXU3KU1YQJ8U8JKMP0-17IY7&rnd=575388.31665'>Click Here to Join the Webinar</a> <br><br>".
		"<a href='http://www.cyberforza.com/files/Cyber_Forza_Webinar_The_Intelligent_Defense_Against_Cyber_Attacks.ics'>Add to your Outlook</a><br> <br>Thanks,<br>CyberForza Team.<br><a href='index.html'><img src='http://www.cyberforza.com/images/logo.png'></a>";
$to = "phadreas@cyberforza.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$headers_confirmation = "From: $to \r\n";
$headers_confirmation .= "Reply-To: $to \r\n";
$headers_confirmation .= "Content-Type: text/html; charset=UTF-8\r\n";
//Semd confirmation email!
mail($visitor_email,$email_subject_confirmation,$email_body_confirmation,$headers_confirmation);
//Send the email to Server!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: landingpage.html');

?>
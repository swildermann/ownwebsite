<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'as@wildermannonline.de'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Kontakt durch Kontaktformular  $name";
$email_body = "Du hast eine Nachricht durch dein Kontaktformular auf www.wildermannonline.de erhalten. \n\n"."Das sind die Details: :\n\nName: $name\n\nE-Mail: $email_address\n\nTelefon: $phone\n\nNachricht:\n$message";
$headers = "From: noreply@wildermannonline.de\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
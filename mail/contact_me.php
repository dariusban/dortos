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
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'dariusz.ban@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Formularz kontaktowy ze strony:  $name";
$email_body = "Otrzymałaś nowa wiadomość ze strony dorstyl.pl.\n\n"."Szczegóły wiadomości:\n\nImię i nazwisko: $name\n\nEmail: $email_address\n\nWiadomość:\n$message";
$headers = "Od: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Odpisz do: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>
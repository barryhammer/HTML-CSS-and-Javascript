<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];
	
	$email_from = 'sledgeh101@gmail.com';
	$email_subject = "New Form Submission';
	$email_body = "User name: $name. \n".
				  "User email: $visitor_email. \n".
				  "User message: $message.\n";
				  
	$to = "barryhammer101@gmail.com";
	
	$headers = "From: $email_from \r \n";
	$headers .= "Reply-To: $visitor_email \r\n";
	mail($to,$email_subject,$email_body,$headers);
	header("Location: contact.html");
?>
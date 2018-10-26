<?php 

	// Grabs info from contact form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	// Set email address to send to 
	$to = "edward.b.bales@gmail.com";

	// Subject tagline for email
	$subject = "Email from BradBales.com";

	// Combines info into email message
	$formcontent = "Someone sent you an email from BradBales.com!\n\nFrom: $name\n\nContact Email: $email\n\nMessage: $message";

	// Header which adds email to reply to
	$mailheader = "From: $email \r\n";

	// Function which actually sends the email
	mail($to, $subject, $formcontent, $mailheader);

?>

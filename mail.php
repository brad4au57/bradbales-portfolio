<?php 

/*** Alternate header for when sending HTML message 

//Always set content-type when sending HTML email
$mailheader = "MIME-Version: 1.0" . "\r\n";
$mailheader .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$mailheader .= 'From: <webmaster@example.com>' . "\r\n";
$mailheader .= 'Cc: myboss@example.com' . "\r\n";

End Alternate Header ***/


// Succcess message for HTML

/* $successMsg = '
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h1>Success!</h1>
		<p>Thank You for contacting me! Your e-mail is on its way!</p>
	</div>
</body>
</html>
'; */

// Grabs info from contact form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set email address to send to 
$to = "edward.b.bales@gmail.com";

// Subject tagline for email
$subject = "Email from BradBales.com";

// Combines info into email message
$formcontent="You received an email from BradBales.com\n\nFrom: $name \n\nMessage: $message";

// Header which adds email to reply to
$mailheader = "From: $email \r\n";

// Function which actually send the email
mail($to, $subject, $formcontent, $mailheader);

if(!mail($to, $subject, $formcontent, $mailheader)) {
	echo "Error! Email not sent. Try again.";
} else {
	// Message to confirm email success
	echo "Thank You! Your e-mail is on its way!";
}


// echo "Thank You! Your e-mail is on its way!";

 // or die("Error! Your message has not sent. Please go back and try again.");

?>
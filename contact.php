<?php
	$lastname = $_POST['lastname'];
	$firstname = $_POST['firstname'];
	$name = $lastname. " " .$firstname;
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'admin@theinternationalschoolofministry.com';
	$email_subject = "Mail From International School of Ministry Website";
	$email_body = "Name: $name.\n".
					"Visitor Email: $visitor_email.\n".
					"Message: $message.\n";

	$to = "info@theinternationalschoolofministry.com";
	$headers = "Reply-To: $visitor_email \r\n";

	$sendmail = mail($to, $email_subject, $email_body, $headers);

	if($sendmail){
		echo "Thank you, Your message has been sent.";
	}
	else{
		echo "Your message was not successfully sent, please try sending again";	
	}
?>

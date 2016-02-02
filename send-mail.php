<?php

	///// Begin configuration /////

		// insert here YOUR email address //
		$to = "info@yoursite.com";	
	
		// insert here YOUR website name //
		$your_site = "[yoursite]";

	///// End configuration /////


	///// Do not edit this code unless you know what you are doing! /////

		$name = $_POST['name']; // retrieve "name" value
		$email = $_POST['email']; // retrieve "email" value
		$user_subject = $_POST['user_subject']; // retrieve "subject" value
		$text = $_POST['message']; // retrieve "message" value
	
		$subject = $your_site . "Message sent from " . $name; // give the email a subject   
		$message = "
\r\n
You've got a new message!  [$name] just sent you a message from $your_site 
\r\n
Name:		$name     
Email:	$email    
Subject:	$user_subject  
\r\n 
Message:
$text
\r\n 
------------------------------------------------------------------------------------------------------------------------------------------------------ \r\n
You can reply to this email to respond.
		"; 
				
		$headers = "From: $name <$email>\r\n";
		$headers .= "Reply-To: $email\r\n";
		$headers .= "Return-Path: $email\r\n"; 
		
		mail($to, $subject, $message, $headers); // send the email  
		
		if(mail($to, $subject, $message, $headers)){
			echo "Your message has been sent and we will be in touch soon!";
		} 
		else{ 
			echo "There's some errors to send the mail, verify your server options";
		}

?>



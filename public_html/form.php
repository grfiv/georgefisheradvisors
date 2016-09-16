<?php

// RECEIVING VARIABLES
@$name = stripslashes($_POST['name']);
@$tel = stripslashes($_POST['tel']);
@$location = stripslashes($_POST['city']);
@$email = stripslashes($_POST['email']);
@$message = stripslashes($_POST['message']);
@$authorization = stripslashes($_POST['authorization']);

@$ip = gethostbyaddr($_SERVER['REMOTE_ADDR']);

if ($authorization=='formtrue')
{
	// CREATE EMAIL
	$pfw_header = "From: $email";
	$pfw_subject = "Email from www.georgefisheradvisors.com";
	$pfw_email_to = "georgerfisher@gmail.com";
	$pfw_message = "Name: $name\n"
	. "Tel: $tel\n"
	. "Location: $location\n"
	. "Email: $email\n"
	. "Message: $message\n"
	. "IP: $ip\n"
	. "\n";

	// SEND EMAIL
	@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header);
}

?>
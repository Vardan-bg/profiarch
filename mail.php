<?php
 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if($email && $_POST["name"] && $_POST["email"] && $_POST["subject"] && $_POST["comment"] ) {
	$to      = 'info@profiarch.com';
	$subject = $_POST["subject"];
	$message = $_POST["comment"]."\r\nFrom: ".$email;
	$email = $_POST["email"];
	$headers = "From: it@profiarch.ru\r\n";
	$headers .= "Reply-To: ".$email."\r\n";
	$headers .= "Return-Path: it@profiarch.ru\r\n";

	if ( mail($to,$subject,$message,$headers, '-fit@profiarch.ru') ) {
		echo "The email has been sent!";
	} else {
		echo "The email has failed!";
	}

}

?> 
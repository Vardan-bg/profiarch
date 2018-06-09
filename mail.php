<?php
if( $_POST["name"] && $_POST["email"] && $_POST["subject"] && $_POST["comment"] ) {
	$to      = 'vartan.bg@gmail.com';
	$subject = $_POST["subject"];
	$message = $_POST["comment"];
	$email = $_POST["email"];
	$headers = "From: ".$email."\r\n";
	$headers .= "Reply-To: ".$to."\r\n";
	$headers .= "Return-Path: ".$email."\r\n";

	if ( mail($to,$subject,$message,$headers) ) {
		echo "The email has been sent!";
	} else {
		echo "The email has failed!";
	}

}

?> 
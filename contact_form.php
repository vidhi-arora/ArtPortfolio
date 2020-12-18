<?php
$user_name= $_POST["Name"];
$user_email= $_POST["email"];
$message= $_POST["message"];

$email_from= "csvidhi15@gmail.com";
$subject= "Message from my ArtPortfolio";
$body= "Name: $user_name.\n".
		"Email ID: $user_email.\n".
		"Message: \n $message";

$to= "csvidhi15@gmail.com";

mail($to,$subject,$body);
header('Location: contact.html');
?>

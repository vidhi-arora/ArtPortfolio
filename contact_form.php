<?php
$user_name = $user_email = $message = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user_name = test_input($_POST["Name"]);
  $user_email = test_input($_POST["email"]);
  $message = test_input($_POST["message"]);
}

$email_from= "csvidhi15@gmail.com";
$subject= "Message from my artportfolio";
$body= "Name: $user_name.\n".
		"Email ID: $user_email.\n".
		"Message: \n $message";

$to= "csvidhi15@gmail.com";

$headers= "From: $email_from \r\n";
$headers.= "Reply To: $user_email \r\n";

mail($to,$subject,$body,$headers);
header('Location: contact.html');
?>
<html>
<head></head>
<body>
<script>
onLoad.alert("Thank You! Your message has been sent.");
</script>
</body>
</html>

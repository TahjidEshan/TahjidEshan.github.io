<?php
$name    = $_POST['name'];
$phone   = $_POST['phone'];
$email   = $_POST['email'];
$message = $_POST['comment'];
$from    = 'From: Demo';
$to      = 'atahjid@gmal.com';
$subject = 'Testing';
$body    = 'Ole';
echo $name, $phone, $email, $message;
if ($_POST['submit']) {
	if (mail($to, $subject, $body, $from)) {
		echo '<p>Your message has been sent!</p>';
	} else {
		echo '<p>Something went wrong, go back and try again!</p>';
	}
}
?>

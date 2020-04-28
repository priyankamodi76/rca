<?php
require_once('phpmailer/class.smtp.php');
require_once('phpmailer/class.phpmailer.php');
smtpmailer('reckonvideos@gmail.com','reckonvideos@gmail.com','Reckon Video','Testing Mail Funtion','Hello User \n You have received this mail from RCA');
function smtpmailer($to, $from, $from_name, $subject, $body) {
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = 'reckonvideos@gmail.com';
	$mail->Password = 'reckonvideo$480';
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		echo "Message Sent";
		return true;
	}
}
//smtpmailer('sirfjitu@gmail.com','reckonvideos@gmail.com','Reckon Video','Testing Mail Funtion','Hello User \n You have received this mail from RCA');
echo "hello User";
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$mail = new PHPMailer(true);
$mail_to_email = '***'; //YOUR EMAIL ADDRESS
$mail_to_name = '***'; //YOUR EMAIL NAME
try {
	$mail_from_name = isset( $_POST['name'] ) ? $_POST['name'] : '';
	$mail_from_email = isset( $_POST['email'] ) ? $_POST['email'] : '';
	$mail_subject = isset( $_POST['subject'] ) ? $_POST['subject'] : '';
	$mail_message = isset( $_POST['message'] ) ? $_POST['message'] : '';
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = '***'; //YOUR EMAIL ADDRESS
	$mail->Password = '***'; //YOUR EMAIL PASSWORD
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	$mail->Port = 465;
	$mail->setFrom($mail_to_email, $mail_to_name);
	$mail->addAddress($mail_from_email, $mail_from_name);
	$mail->isHTML(true);
	$mail->Subject = $mail_subject;
	$mail->Body = $mail_message;
	$mail->Send();{
header('Location: mail.php');
}}
catch (Exception $e) {
  echo "Message could not be sent. Error: {$mail->ErrorInfo}";
}
?>
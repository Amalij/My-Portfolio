<?php
$name= $_POST["name"];
$email= $_POST["email"];
$subject= $_POST["subject"];
$message= $_POST["message"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

 $mail= new PHPMailer(true);

 $mail->isSMTP();
 $mail->SMTPAuth = true;

 $mail->Host = "smtp.example.com";
 $mail->SMTP
?>
<?php

require('vendor/autoload.php');
require("vendor/phpmailer/phpmailer/src/SMTP.php");

define('GMailUSER', 'bdefakecesi@gmail.com'); // utilisateur Gmail
define('GMailPWD', 'mdp1234*/'); // Mot de passe Gmail

function smtpMailer($to, $from, $from_name, $subject, $body) {
	$mail = new PHPMailer\PHPMailer\PHPMailer();  // Cree un nouvel objet PHPMailer
	$mail->IsSMTP(); // active SMTP
	$mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
	$mail->SMTPAuth = true;  // Authentification SMTP active
	$mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = GMailUSER;
	$mail->Password = GMailPWD;
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		return 'Mail error: '.$mail->ErrorInfo;
	} else {
		return true;
    }
}

    ?>
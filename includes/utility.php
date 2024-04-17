<?php

require_once ("includes/config.php");
require_once ("lib/PHPMailer-6.9.1/src/PHPMailer.php");
require_once ("lib/PHPMailer-6.9.1/src/Exception.php");
require_once ("lib/PHPMailer-6.9.1/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

function sendMail($email, $name, $subject, $messageBody)
{

    date_default_timezone_set('Etc/UTC');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF; // OR DEBUG_SERVER
    $mail->Host = $GLOBALS['SMTP_HOSTNAME'];
    $mail->Port = 25;
    $mail->SMTPAuth = true;
    $mail->Username = $GLOBALS['SMTP_USERNAME'];
    $mail->Password = $GLOBALS['SMTP_PASSWORD'];
    $mail->setFrom($GLOBALS['SMTP_FROM_EMAIL'], $GLOBALS['SMTP_FROM_NAME']);
    $mail->addReplyTo($email, $name);
    $mail->addAddress($GLOBALS['CONTACT_US_EMAIL'], $GLOBALS['CONTACT_US_NAME']);
    $mail->Subject = $subject;
    $mail->msgHTML($messageBody);

    return $mail->send();
}

function validateCaptcha($captcha)
{
    $recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
    $response = json_decode(file_get_contents($recaptchaUrl . "?secret=" . $GLOBALS['RECAPTCHA_SECRET_KEY'] . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']), true);
    return $response['success'];
}
?>
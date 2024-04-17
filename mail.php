<?php

session_start();

require_once ("includes/config.php");
require_once ("lib/PHPMailer-6.9.1/src/PHPMailer.php");
require_once ("lib/PHPMailer-6.9.1/src/Exception.php");
require_once ("lib/PHPMailer-6.9.1/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$email = $_REQUEST['email'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$message = nl2br($_REQUEST['message']);
$subject = "Contact Us";

$messageBody = <<<EOD
<p>New Contact Us form submission!</p>
<p><b>Name</b>: $name</p>
<p><b>Email</b>: $email</p>
<p><b>Phone</b>: $phone</p>
<p><b>Message</b>:</p>
<p>$message</p>
EOD;

date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_OFF; // OR DEBUG_SERVER
$mail->Host = $SMTP_HOSTNAME;
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = $SMTP_USERNAME;
$mail->Password = $SMTP_PASSWORD;
$mail->setFrom($SMTP_FROM_EMAIL, $SMTP_FROM_NAME);
$mail->addReplyTo($email, $name);
$mail->addAddress($CONTACT_US_EMAIL, $CONTACT_US_NAME);
$mail->Subject = $subject;
$mail->msgHTML($messageBody);

$captcha = $_POST['g-recaptcha-response'];
$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
$response = json_decode(file_get_contents($recaptchaUrl . "?secret=" . $RECAPTCHA_SECRET_KEY . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']), true);

if ($response['success'] && $mail->send()) {
    $_SESSION['notice'] = "Successfully sent your note.";
} else {
    $_SESSION['notice'] = 'There was an error sending your note. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
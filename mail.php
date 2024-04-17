<?php

session_start();

require_once("includes/smtp-mail.php");

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

$captcha = $_POST['g-recaptcha-response'];
$recaptchaUrl = "https://www.google.com/recaptcha/api/siteverify";
$response = json_decode(file_get_contents($recaptchaUrl . "?secret=" . $RECAPTCHA_SECRET_KEY . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']), true);

if ($response['success'] && sendMail($email, $name, $subject, $messageBody)) {
    $_SESSION['notice'] = "Successfully sent your note.";
} else {
    $_SESSION['notice'] = 'There was an error sending your note. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
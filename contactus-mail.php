<?php

session_start();

require_once("includes/utility.php");

$captcha = $_POST['g-recaptcha-response'];
$fromEmail = $_REQUEST['email'];
$fromname = $_REQUEST['name'];
$fromPhone = $_REQUEST['phone'];
$fromMessage = nl2br($_REQUEST['message']);
$subject = "[HAFH] Contact Us";

$messageBody = <<<EOD
<p>New Contact Us form submission!</p>
<p><b>Name</b>: $fromname</p>
<p><b>Email</b>: $fromEmail</p>
<p><b>Phone</b>: $fromPhone</p>
<p><b>Message</b>:</p>
<p>$fromMessage</p>
EOD;

if (validateCaptcha($captcha) && sendMail($fromEmail, $fromname, $subject, $messageBody)) {
    $_SESSION['notice'] = "Successfully sent your note.";
} else {
    $_SESSION['notice'] = 'There was an error sending your note. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
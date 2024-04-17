<?php

session_start();

require_once("includes/utility.php");

$captcha = $_POST['g-recaptcha-response'];
$fromEmail = "k@doopr.com";
$fromName = "Newsletter";
$subject = "[HAFH] Newsletter";
$messageBody = "<p>".$_REQUEST['email']."</p>";

if (validateCaptcha($captcha) && sendMail($fromEmail, $fromName, $subject, $messageBody)) {
    $_SESSION['notice'] = "Your email address has been added.";
} else {
    $_SESSION['notice'] = 'There was an error. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
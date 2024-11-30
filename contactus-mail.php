<?php

session_start();

require_once("includes/utility.php");

$captcha = $_POST['g-recaptcha-response'];
$fromEmail = $_REQUEST['email'];
$fromName = $_REQUEST['name'];
$fromPhone = $_REQUEST['phone'];
$fromMessage = nl2br($_REQUEST['message']);
$subject = "[HAFH] Contact Us - from ".$fromName;

$quote = $_REQUEST['quote'];
$boardingFrom  = $_REQUEST['boardingFrom'];
$boardingTo = $_REQUEST['boardingTo'];
$dogType  = $_REQUEST['dogType'];
$dogAge  = $_REQUEST['dogAge'];
$dogState = $_REQUEST['dogState'];
$dogVaccinations  = $_REQUEST['dogVaccinations'];

$quoteRequested = "";
$quote = $quote == "" ? "not specified" : $quote;
$quoteRequested .= "<p><b>Service type:</b> $quote</p>";
if ($quote == "boarding") {
    $quoteRequested .= "<p><b>From:</b> $boardingFrom to $boardingTo</p>";
}
if ($dogType != "") {
    $quoteRequested .= "<p><b>Dog Type:</b> $dogType</p>";
}
if ($dogAge != "") {
    $quoteRequested .= "<p><b>Dog Age:</b> $dogAge</p>";
}
if ($dogState != "Choose one:") {
    $quoteRequested .= "<p><b>Dog State:</b> $dogState</p>";
}
if ($dogVaccinations == "yes") {
    $quoteRequested .= "<p><b>Confirmed for vaccionations.</b></p>";
} else {
    $quoteRequested .= "<p><b>Not confirmed for vaccionations.</b></p>";
}

$messageBody = <<<EOD
<p>New Contact Us form submission!</p>
<p><b>Name</b>: $fromName</p>
<p><b>Email</b>: $fromEmail</p>
<p><b>Phone</b>: $fromPhone</p>
<hr/>
<p><b>Quote requested</b>:</p>
<p>$quoteRequested</p>
<hr/>
<p><b>Message</b>:</p>
<p>$fromMessage</p>
EOD;

if (validateCaptcha($captcha) && sendMail($fromEmail, $fromName, $subject, $messageBody)) {
    $_SESSION['notice'] = "Successfully sent your note.";
} else {
    $_SESSION['notice'] = 'There was an error sending your note. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
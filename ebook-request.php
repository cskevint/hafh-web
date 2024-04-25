<?php

session_start();

require_once ("includes/utility.php");

$subscriberEmail = $_REQUEST['email'];

if (strlen(trim($subscriberEmail)) > 0) {
    $fromEmail = "k@doopr.com";
    $fromName = "E-book Request";
    $subject = "[HAFH] E-book Request";
    $messageBody = "<p>" . $subscriberEmail . "</p>";

    if (sendMail($fromEmail, $fromName, $subject, $messageBody)) {
        $_SESSION['notice'] = "Your e-book download link is on its way.";
    } else {
        $_SESSION['notice'] = 'There was an error. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
    }

    file_put_contents($EBOOK_CSV, $subscriberEmail . "\n", FILE_APPEND | LOCK_EX);
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
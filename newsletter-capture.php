<?php

session_start();

require_once ("includes/utility.php");

$subscriberEmail = $_REQUEST['email'];

if (strlen(trim($subscriberEmail)) > 0) {
    $fromEmail = "k@doopr.com";
    $fromName = "Newsletter";
    $subject = "[HAFH] Newsletter";
    $messageBody = "<p>" . $subscriberEmail . "</p>";

    if (!str_contains($subscriberEmail,'serviseantilogin')) {
      # Disable email sending for Newsletter.
      # if (sendMail($fromEmail, $fromName, $subject, $messageBody)) {
      $_SESSION['notice'] = "Your email address has been added.";
      # } else {
      #    $_SESSION['notice'] = 'There was an error. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
      #}

      file_put_contents($NEWSLETTER_CSV, $subscriberEmail . "\n", FILE_APPEND | LOCK_EX);   
    } else {
      $_SESSION['notice'] = 'An error has occurred.';
    }
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>

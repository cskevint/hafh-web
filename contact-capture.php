<?php

session_start();

include_once "vendor/autoload.php";
require_once "includes/utility.php";

if (!isset($_REQUEST['redirect'])) {
    header("Location: /500");
    exit();
}

$subscriberName = $_REQUEST['name'];
$subscriberEmail = $_REQUEST['email'];

$hubspot = \HubSpot\Factory::createWithAccessToken($HUBSPOT_API_TOKEN);

function hubspotContactExists()
{
    global $HUBSPOT_API_TOKEN, $hubspot, $subscriberEmail;
    if ($HUBSPOT_API_TOKEN == "") {
        return true;
    }
    $filter = new \HubSpot\Client\Crm\Contacts\Model\Filter();
    $filter
        ->setOperator('EQ')
        ->setPropertyName('email')
        ->setValue($subscriberEmail);

    $filterGroup = new \HubSpot\Client\Crm\Contacts\Model\FilterGroup();
    $filterGroup->setFilters([$filter]);

    $searchRequest = new \HubSpot\Client\Crm\Contacts\Model\PublicObjectSearchRequest();
    $searchRequest->setFilterGroups([$filterGroup]);
    $searchRequest->setProperties(['email']);

    $response = $hubspot->crm()->contacts()->searchApi()->doSearch($searchRequest);
    return count($response->getResults()) > 0;
}

function addContactToHubspot()
{
    global $HUBSPOT_API_TOKEN, $hubspot, $subscriberName, $subscriberEmail;
    if ($HUBSPOT_API_TOKEN == "") {
        return "";
    }
    $contactInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput();
    $contactInput->setProperties([
        'email' => $subscriberEmail,
        'firstname' => $subscriberName
    ]);
    return $hubspot->crm()->contacts()->basicApi()->create($contactInput);
}

if (!strlen(trim($subscriberEmail)) > 0) {
    header("Location: {$redirectTo}");
    exit();
}

if ($_REQUEST['redirect'] == "ebook") {
    $fromEmail = "k@doopr.com";
    $fromName = "E-book Request";
    $subject = "[HAFH] E-book Request";
    $messageBody = "<p>{$subscriberEmail}</p>";

    if (sendMail($fromEmail, $fromName, $subject, $messageBody)) {
        $_SESSION['notice'] = "Your e-book download link is on its way.";
    } else {
        $_SESSION['notice'] = 'There was an error. Please email us: <a href="mailto:selena@houndawayfromhome.com">selena@houndawayfromhome.com</a>';
    }

    file_put_contents($EBOOK_CSV, "{$subscriberEmail}\n", FILE_APPEND | LOCK_EX);

    $redirectTo = "/course";
} else if ($_REQUEST['redirect'] == "quiz") {
    $redirectTo = setUrlParam($_SERVER['HTTP_REFERER'], ['question' => 'DONE']);
} else if ($_REQUEST['redirect'] == "guide") {
    $redirectTo = "/introductory-guide-video";
}

// Store contact in HubSpot.
if (!hubspotContactExists()) {
    addContactToHubspot();
}

header("Location: {$redirectTo}");
?>
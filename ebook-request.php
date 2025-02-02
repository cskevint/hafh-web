<?php

session_start();

include_once "vendor/autoload.php";
require_once("includes/utility.php");

$subscriberName = $_REQUEST['name'];
$subscriberEmail = $_REQUEST['email'];

$hubspot = \HubSpot\Factory::createWithAccessToken($HUBSPOT_API_TOKEN);

function contactExists($hubspot, $subscriberEmail)
{
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

function addContact($hubspot, $subscriberName, $subscriberEmail)
{
    $contactInput = new \HubSpot\Client\Crm\Contacts\Model\SimplePublicObjectInput();
    $contactInput->setProperties([
        'email' => $subscriberEmail,
        'firstname' => $subscriberName
    ]);
    return $hubspot->crm()->contacts()->basicApi()->create($contactInput);
}

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

    if(!contactExists($hubspot, $subscriberEmail)){
        $response = addContact($hubspot, $subscriberName, $subscriberEmail);
    }    
}
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
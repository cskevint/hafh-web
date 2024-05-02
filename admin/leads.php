<?php
session_start();
require_once ("../includes/config.php");

if (!in_array($_SERVER['REMOTE_ADDR'], $GLOBALS['DEVELOPMENT_IPS'])) {
    header('Location: /404.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Leads</title>
</head>

<body>
    <div class="container p-5">
        <h1 class="text-center pb-5">Leads</h1>
        <div class="row">
            <div class="col">
                <h2>Ebook</h2>
                <?php
                    $ebook_csv = file_get_contents("../".$GLOBALS['EBOOK_CSV'], true);
                    $ebook_emails = array_filter(array_unique(explode("\n", $ebook_csv)));
                    echo implode('<br/>', $ebook_emails);
                ?>
            </div>
            <div class="col">
                <h2>Newsletter</h2>
                <?php
                    $newsletter_csv = file_get_contents("../".$GLOBALS['NEWSLETTER_CSV'], true);
                    $newsletter_emails = array_filter(array_unique(explode("\n", $newsletter_csv)));
                    echo implode('<br/>', $newsletter_emails);
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
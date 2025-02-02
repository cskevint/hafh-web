<?php
session_start();
include_once "vendor/autoload.php";
require_once "redirect.php";

$_GLOBALS["pageTitle"] = "FAQs";
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    <section class="container-fluid px-0 bg-info">
        <div class="container p-lg-5 p-md-4 p-3 px-0">
            <div class="bg-light rounded-5 p-lg-5 p-md-4 p-3">
                <h1 class="mb-ms-5 mb-3">Frequently Asked Questions</h1>

                <?php
                $Parsedown = new ParsedownExtra();
                $faqs = file_get_contents('faqs.md');
                echo $Parsedown->text($faqs);
                ?>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>

</body>

</html>
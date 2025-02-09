<?php
session_start();
require_once "redirect.php";
$_GLOBALS["pageTitle"] = "Our Services";
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include "includes/head-tag-contents.php"; ?>
</head>

<body>

    <?php include "includes/navigation.php"; ?>

    <section class="container-fluid px-0 bg-info">
        <div class="container p-lg-5 p-md-4 p-3 px-0">
            <div class="bg-light rounded-5 p-lg-5 p-md-4 p-3">
                <h1 class="mb-ms-5 mb-3"><?= $_GLOBALS["pageTitle"] ?></h1>
                <p>We offer a variety of services for your pets. Contact us for more details.</p>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>

</body>

</html>
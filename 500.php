<?php
session_start();
require_once "redirect.php";
$_GLOBALS["pageTitle"] = "Not found";
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include "includes/head-tag-contents.php"; ?>
</head>

<body>

    <?php include "includes/navigation.php"; ?>

    <section class="bg-light mb-0">
        <div class="container p-5">
            <h1 class="mb-5">500 Error!</h1>
            <a href="/" class="btn btn-secondary">Go to the homepage</a>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>

</body>

</html>
<?php
session_start();
require_once("redirect.php");
$_GLOBALS["pageTitle"] = "Watch an Introductory Guide";
?>
<!doctype html>
<html lang="en" class="bg-secondary">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/devserver.php"); ?>
    <?php include("includes/debug.php"); ?>

    <section class="container-fluid bg-primary">
        <div class="container p-2 d-flex justify-content-center">
            <a href="/">
                <img src="images/logo-transparent.png" alt="Hound Away From Home" style="max-height:200px;" />
            </a>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="container p-1 p-md-4 p-lg-5 text-center">
            <iframe class="youtube-video" src="https://www.youtube.com/embed/mK9lg1l1KkU" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>

    <section class="container-fluid bg-secondary">
        <div class="container p-3">
            <p class="fw-light text-light" style="font-size:0.8em;">
                This site is not a part of the Google website or Google Inc., Facebook/Meta website, or Meta, Inc.
                Additionally, this site is NOT endorsed by Google or Meta in any way. Amazon and all related marks are
                trademarks of Amazon.com, Inc. or its affiliates. Publishing.com is not affiliated with or endorsed by
                Amazon.com, Inc. or its affiliates.
            </p>
            <p class="fw.light text-light fs-6 text-center">&copy; 2025 HoundAwayFromHome.com. All rights reserved.</p>
        </div>
    </section>

    <?php include("includes/bootstrapjs.php"); ?>
</body>

</html>
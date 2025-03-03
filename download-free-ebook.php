<?php
session_start();
require_once "redirect.php";
$_GLOBALS["pageTitle"] = "Download our Free E-book";
$_GLOBALS["pageDescription"] = "Learn the basics of setting up your own at-home dog-boarding business by getting your own free copy of our e-book!";
$_GLOBALS["pageShareImage"] = "/images/share/ebook.jpg";
?>
<!doctype html>
<html lang="en" class="bg-secondary">

<head>
    <?php include "includes/head-tag-contents.php"; ?>
</head>

<body>

    <?php include "includes/devserver.php"; ?>
    <?php include "includes/debug.php"; ?>

    <section class="container-fluid bg-primary">
        <div class="container p-2 d-flex justify-content-center">
            <a href="/">
                <img src="images/logo-transparent.png" alt="Hound Away From Home" style="max-height:200px;" />
            </a>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="container p-4 p-md-4 p-lg-5 text-center">
            <h1 class="px-0 px-md-2 px-lg-5">Learn the basics of setting up your own at-home dog-boarding business</h1>
            <h3 class="py-2 text-muted">by getting your own free copy of our e-book!</h3>
            <hr class="m-3 m-md-4 m-lg-5" />
            <div class="row mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" action="contact-capture.php?redirect=ebook" id="ebook-form">
                        <div class="input-group input-group-lg mb-3">
                            <input class="form-control" type="text" placeholder="Your name" name="name"
                                aria-label="Your name" required />
                        </div>
                        <div class="input-group input-group-lg mb-3">
                            <input class="form-control" type="email" placeholder="Your email address" name="email"
                                aria-label="Your email address" required />
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-lg btn-primary">
                                Send me the PDF!
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
            <div class="my-3 text-center">
                <a href="/course" class="link-secondary link-offset-2 link-offset-3-hover link-underline-opacity-50-hover">
                    Learn about our online course!
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-secondary">
        <div class="container p-3">
            <p class="fw-light text-light">
                This site is not a part of the Google website or Google Inc., Facebook/Meta website, or Meta, Inc.
                Additionally, this site is NOT endorsed by Google or Meta in any way.
            </p>
            <p class="fw-light text-light fs-6 text-center">&copy; 2025 <a href="http://www.houndawayfromhome.com"
                    class="link-light text-decoration-none">HoundAwayFromHome.com</a>. All rights reserved.</p>
        </div>
    </section>

    <?php include "includes/bootstrapjs.php"; ?>
</body>

</html>
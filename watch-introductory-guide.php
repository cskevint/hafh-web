<?php
session_start();
require_once "redirect.php";
$_GLOBALS["pageTitle"] = "Watch an Introductory Guide";
$_GLOBALS["pageDescription"] = "Learn all about the at-home dog-boarding and doggy daycare business and how you can get started in just 9 days!";
$_GLOBALS["pageShareImage"] = "/images/share/guide.jpg";
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
        <div class="container p-4 p-md-4 p-lg-5">
            <h1 class="px-0 px-md-2 px-lg-5 text-center">Learn all about the at-home dog-boarding and doggy daycare business</h1>
            <h3 class="py-2 text-muted text-center">and how you can get started in just 9 days!</h3>
            <h3 class="py-2 text-center text-primary">Work from home, cuddle dogs, make money!</h3>
            <h4 class="py-2 text-center text-secondary">Access our free getting started video now.</h4>
            <hr class="m-3 m-md-4 m-lg-5" />
            <div class="row mb-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <form method="post" action="contact-capture.php?redirect=guide" id="ebook-form">
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
                                Take me to the introductory guide!
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
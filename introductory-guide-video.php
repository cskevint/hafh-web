<?php
session_start();
require_once "redirect.php";
$_GLOBALS["pageTitle"] = "Watch an Introductory Guide";
$_GLOBALS["pageDescription"] = "Welcome to our introductory guide about your at-home dog-boarding business!";
$_GLOBALS["pageShareImage"] = "/images/share/guide.jpg";
?>
<!doctype html>
<html lang="en" class="bg-secondary">

<head>
    <?php include "includes/head-tag-contents.php"; ?>
    <meta name="robots" content="noindex">
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
        <div class="container p-1 p-md-4 p-lg-5 text-center">
            <h1 class="px-0 px-md-2 px-lg-5">Welcome to our introductory guide about your at-home dog-boarding business!
            </h1>
            <iframe class="youtube-video" src="https://www.youtube.com/embed/mK9lg1l1KkU" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="my-3 text-center">
                <a href="/course" class="btn btn-primary btn-lg rounded-pill px-5">
                    Enroll in our course now!
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-secondary text-light">
        <div class="container p-3">
            <p class="fw-light">
                This site is not a part of the Google website or Google Inc., Facebook/Meta website, or Meta, Inc.
                Additionally, this site is NOT endorsed by Google or Meta in any way.
            </p>
            <p class="fw-light fs-6 text-center">&copy; 2025 <a href="http://www.houndawayfromhome.com"
                    class="link-light text-decoration-none">HoundAwayFromHome.com</a>. All rights reserved.</p>
        </div>
    </section>

    <div class="modal modal-lg fade enroll-modal" id="enrollModal" tabindex="-1" aria-labelledby="enroll" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header align-items-start">
                    <h1 class="modal-title" id="enroll">Don't miss out on this chance!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="fs-3">You are so close to learning about the full potential of running a dog boarding business from
                        your own home.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <a href="/course" class="btn btn-primary btn-lg rounded-pill px-5">
                        Enroll in our course now!
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            var state = "loaded";
            document.addEventListener("visibilitychange", function () {
                if (state == "loaded") {
                    state = "blurred";
                } else if (state == "blurred") {
                    state = "focused";
                    const modal = new bootstrap.Modal('#enrollModal', {});
                    modal.show();
                }
            });
        });
    </script>
    <?php include "includes/bootstrapjs.php"; ?>
</body>

</html>
<?php 
session_start(); 
require_once ("redirect.php");
$_GLOBALS["pageTitle"] = "Course";
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>

    <section class="container-fluid px-0 bg-info">
        <div class="container p-lg-5 p-md-4 p-3 px-0">
            <div class="bg-light rounded-5 p-lg-5 p-md-4 p-3">
                <?php
                    if (isset($_SESSION['notice'])) {
                        echo '<div class="alert alert-info">' . $_SESSION['notice'] . '</div>';
                        unset($_SESSION['notice']);
                    }
                ?>
                <h1 class="mb-ms-5 mb-3">Take our at-home dog boarding business course!</h1>

                <div class="row justify-content-md-center">
                    <div class="col-md-12 p-3">

                        <iframe class="youtube-video" src="https://www.youtube.com/embed/h5XpsEWjJlk"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                        <p class="pt-3">Ready to turn your love for dogs into a thriving business? Our online course
                            will tell you everything you need to know to run your own at-home dog boarding business!</p>

                        <h5>Why Choose Dog Boarding?</h5>
                        <p>Escape the 9-to-5 grind and enjoy the freedom of being your own boss while caring for
                            adorable pups. Whether you're a stay-at-home parent or an aspiring entrepreneur, dog
                            boarding offers wonderful opportunities for financial independence and personal fulfillment.
                        </p>

                        <h5>Ready to Get Started?</h5>
                        <p>Click the Enroll button below to navigate to the enrollment page on our elearning platform:
                        </p>

                        <p class="text-center">
                            <a class="btn btn-primary btn-lg" href="http://www.google.com">Enroll now!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php");?>

</body>

</html>
<?php
session_start();
require_once ("redirect.php");
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>

    <div class="header-bg">
        <?php
            if (isset($_SESSION['notice'])) {
                echo '<div class="container px-5"><div class="alert alert-info text-center">' . $_SESSION['notice'] . '</div></div>';
                unset($_SESSION['notice']);
            }
        ?>
        <main class="">
            <div class="container py-4">
                <div class="p-sm-5 p-3 border-0 rounded-0 rounded-sm-5 hero-image">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold text-white">Safe, Loved, and Pampered</h1>
                        <p class="col-md-8 fs-4 text-white">Dog boarding and daycare reimagined: the ultimate comfort of
                            home for your dog.</p>
                        <a class="btn btn-primary btn-lg px-4 rounded-pill" href="/contactus.php">Book with us now!</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <section class="bg-light mb-0">
        <div class="container p-lg-5 p-md-4 p-3">
            <h1 class="mb-md-5 mb-sm-2">Services</h1>
            <p class="fs-5">Hound Away From Home is a home-based dog boarding and daycare service conveniently
                located in the heart of the Peninsula. You'll love that a family is caring for your dog when you go on
                vacation! Daily pictures, a large backyard, and other friendly playmates are just some of the perks of
                your pup’s stay at Hound Away From Home. <a class="text-primary" href="/faqs.php"><strong>Learn more...</strong></a></p>
            <div class="row mt-5 justify-content-md-center">
                <div class="col-md-5 mb-3 mb-md-0">
                    <div class="card border-0 rounded-0 rounded-sm-5">
                        <img src="/images/image2.jpg" class="card-img-top rounded-top-0 rounded-top-sm-5" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                Dog boarding
                            </h3>
                            <p class="card-text">Discover our professional dog boarding services, providing a safe and
                                comfortable environment for your pet while you're away.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card border-0 rounded-0 rounded-sm-5">
                        <img src="/images/image1.jpg" class="card-img-top rounded-top-0 rounded-top-sm-5" alt="...">
                        <div class="card-body">
                            <h3 class="card-title">
                                Doggy daycare
                            </h3>
                            <p class="card-text">Explore our trusted dog daycare services, offering a stimulating and
                                supervised environment for your furry friend to socialize and play while you're busy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid px-0 bg-info">
        <div class="container p-lg-5 p-md-4 p-3">
            <h1 class="mb-md-5 mb-sm-2">Read our reviews!</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12 px-4 py-3 d-flex align-items-center justify-content-center">
                    <a href="https://www.facebook.com/houndawayfromhome/"><img src="images/logo-facebook.png" class="img-fluid"/></a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 px-4 py-3 d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/houndawayfromhomesm/"><img src="images/logo-instagram.png" class="img-fluid"/></a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 px-4 py-3 d-flex align-items-center justify-content-center">
                    <a href="https://www.yelp.com/biz/hound-away-from-home-san-mateo"><img src="images/logo-yelp.png" class="img-fluid"/></a>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12 px-4 py-3 d-flex align-items-center justify-content-center">
                    <a href="https://www.rover.com/members/leila-g-loving-family-at-home-full-time/"><img src="images/logo-rover.png" class="img-fluid"/></a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-success">
        <div class="container p-lg-5 p-md-4 p-3">
            <h1 class="mb-md-5 mb-sm-2">Locations</h1>
            <div class="row justify-content-md-center">
                <div class="col-lg-8">
                    <div class="google-maps">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12649.037382027613!2d-122.3207829!3d37.5725103!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f9e786d2c5a89%3A0x5f25f305b0b1a181!2sHound%20Away%20From%20Home!5e0!3m2!1sen!2sus!4v1713274048009!5m2!1sen!2sus"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <p class="mt-5 fs-5">Now open in two San Mateo locations!</p>
                    <ul>
                        <li>Northern location @ <a href="https://maps.app.goo.gl/MHRQ2CakjJwrXeZR8"
                                class="text-secondary">Tilton Ave & N Grant St</a></li>
                        <li>Southern location @ <a href="https://www.instagram.com/houndawayfromhomessm/" class="text-secondary">7th Ave & Humboldt St</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php");?>

</body>

</html>
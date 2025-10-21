<?php
session_start();
require_once "redirect.php";
$_GLOBALS["pageTitle"] = "About Us";
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

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="bg-success rounded" style="height:100%">
                                <img src="images/image-nargiz.jpg" class="card-img img-responsive rounded-start-pill-5"
                                    alt="Nargiz Ermatova and family">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">North Location</h5>
                                <p class="card-text">Nargiz Ermatova, a dog lover and experienced caregiver based in San Mateo. She has been caring for dogs of all sizes for years and loves giving them attention, playtime, and plenty of cuddles. She also enjoys cooking, painting, and spending time outdoors. Your dog will be treated like part of Nargiz’s family!</p>
                                <p>Check out her <a href="https://www.instagram.com/houndawayfromhomeinc/"
                                        class="text-secondary"><i class="bi bi-instagram mx-1"></i>Instagram</a>!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="bg-success rounded" style="height:100%">
                                <img src="images/image-leila.jpg" class="card-img img-responsive" alt="Leila Gates.">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">South Location</h5>
                                <p class="card-text">Leila Gates recently moved to the Bay Area and has started the
                                    second location for Hound Away From Home. She has over a decade of experience caring
                                    for dogs. Working from home with her homeschooling teenage daughters, they provide
                                    round-the-clock companionship and personalized care for each dog.</p>
                                <p>Check out her <a href="https://www.instagram.com/houndawayfromhomessm/"
                                        class="text-secondary"><i class="bi bi-instagram mx-1"></i>Instagram</a>!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="bg-success rounded" style="height:100%">
                                <img src="images/image-selena.jpg" class="card-img img-responsive" alt="Nargiz">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Owner</h5>
                                <p class="card-text">Selena Trotter is very passionate about dogs and caring for them, and helps Leila and Nargiz run their businesses so that they can spend their time loving dogs. While not physically close anymore, Selena is in close contact with each of them so that we can ensure the smooth business operations of Hound Away from Home.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/footer.php"; ?>

</body>

</html>
<?php 
session_start();
require_once ("redirect.php");
$_GLOBALS["pageTitle"] = "About Us";
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>

    <section class="container-fluid bg-info">
        <div class="container p-lg-5 p-md-4 p-3">
            <div class="bg-light rounded-5 p-lg-5 p-md-4 p-3">

                <h1 class="mb-5">About Us</h1>

                <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <div class="bg-success rounded" style="height:100%">
                                <img src="images/image-selena.jpg" class="card-img img-responsive rounded-start-pill-5"
                                    alt="Selena Trotter and family">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">North Location</h5>
                                <p class="card-text">Selena Trotter has lived in the San Francisco Bay Area since 2008.
                                    She and her husband bought their house in 2009 and have turned into a comfortable
                                    doggy hotel (where people can visit too!). Selena has taken care of her dogs since
                                    her early childhood, and has taken care of other dogs professionally since 2012.</p>
                                <p>Check out her <a href="https://www.instagram.com/houndawayfromhomesm/" class="text-secondary"><i class="bi bi-instagram mx-1"></i>Instagram</a>!</p>
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
                                <p>Check out her <a href="https://www.instagram.com/houndawayfromhomessm/" class="text-secondary"><i class="bi bi-instagram mx-1"></i>Instagram</a>!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php");?>

</body>

</html>
<?php 
session_start(); 
$_GLOBALS["pageTitle"] = "Ebook";
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
                <?php
                    if (isset($_SESSION['notice'])) {
                        echo '<div class="alert alert-info">' . $_SESSION['notice'] . '</div>';
                        unset($_SESSION['notice']);
                    }
                ?>
                <h1 class="">Get our free ebook!</h1>
                <div class="row justify-content-md-center">
                    <div class="col-md-6 py-5">
                        <h3>Discover How to Run a Profitable Dog Boarding Business from Home!</h3>

                        <p>Ready to turn your love for dogs into a thriving business? Our free ebook will get you started!
                            Learn how to begin and grow a successful dog boarding business right from your own home.</p>

                        <h5>Why Choose Dog Boarding?</h5>
                        <p>Escape the 9-to-5 grind and enjoy the freedom of being your own boss while caring for
                            adorable pups. Whether you're a stay-at-home parent or an aspiring entrepreneur, dog
                            boarding offers wonderful opportunities for financial independence and personal fulfillment.
                        </p>

                        <h5>Ready to Get Started?</h5>
                        <p>To receive a download link for the ebook, simply provide your email address below.</p>

                        <form method="post" action="ebook-request.php" id="ebook-form">
                            <div class="input-group mb-3">
                                <input class="form-control" type="email" placeholder="Your email address" name="email"
                                    aria-label="Your email address" required autocomplete="off"> 
                                <button class="btn btn-secondary btn-lg" type="submit"><i class="bi bi-send"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="images/image-ebook.png" class="img-fluid" alt="Hound Away From Home">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php");?>

</body>

</html>
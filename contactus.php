<?php 
session_start(); 
require_once("includes/config.php");
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>

    <section class="container-fluid bg-info">
        <div class="container p-5">
            <div class="bg-light rounded-5 p-5">
                <h1 class="mb-5">Contact Us</h1>

                <?php
                    if (isset($_SESSION['notice'])) {
                        echo '<div class="alert alert-info">' . $_SESSION['notice'] . '</div>';
                        unset($_SESSION['notice']);
                    }
                ?>

                <section class="bg-light">
                    <div class="container">
                        <p class="text-secondary lead">Have questions about our dog boarding services or
                            ready to schedule your pet's stay? <b>We're here to help!</b></p>
                        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                    </div>

                    <div class="container">
                        <div class="row justify-content-lg-center">
                            <div class="col-12 col-lg-9">
                                <div class="bg-white border rounded shadow-sm overflow-hidden">

                                    <form method="post" action="/contactus-mail.php" id="contact-us-form">
                                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                            <div class="col-12">
                                                <label for="name" class="form-label">Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" value=""
                                                    required>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="email" class="form-label">Email <span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="bi bi-envelope"></i>
                                                    </span>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        value="" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label for="phone" class="form-label">Phone Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">
                                                        <i class="bi bi-telephone"></i>
                                                    </span>
                                                    <input type="tel" class="form-control" id="phone" name="phone"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="message" class="form-label">Message <span
                                                        class="text-danger">*</span></label>
                                                <textarea class="form-control" id="message" name="message" rows="3"
                                                    required></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-lg g-recaptcha" type="submit"
                                                        data-sitekey="<?=$RECAPTCHA_SITE_KEY?>" 
                                                        data-callback="onContactUsSubmit"
                                                        data-action="submit">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php");?>
</body>

</html>
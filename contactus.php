<?php
session_start();
require_once "redirect.php";
require_once "includes/config.php";
$_GLOBALS["pageTitle"] = "Contact Us";
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
                        <hr class="w-75 mx-auto mb-3 mb-xl-5 border-dark-subtle">
                    </div>

                    <div class="container">
                        <div class="row justify-content-lg-center">
                            <div class="col-12 col-lg-9 px-0">
                                <div class="bg-white border rounded shadow-sm overflow-hidden redblock">

                                    <form method="post" action="/contactus-mail.php" id="contact-us-form">
                                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                            <!-- Honeypot field for spam bots -->
                                            <div class="d-none">
                                                <label for="fax_number">Fax Number</label>
                                                <input type="text" name="fax_number" id="fax_number" value="">
                                            </div>
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
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h6 class="card-title">Request a quote</h6>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="quote"
                                                                id="quoteDaycare" value="daycare"
                                                                onChange="onQuoteChange()">
                                                            <label class="form-check-label" for="quoteDaycare">
                                                                Daycare
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="quote"
                                                                id="quoteBoarding" value="boarding"
                                                                onChange="onQuoteChange()">
                                                            <label class="form-check-label" for="quoteBoarding">
                                                                Boarding
                                                            </label>
                                                        </div>
                                                        <div class="input-group d-none my-3" id="boardingDates">
                                                            <span class="input-group-text">From</span>
                                                            <input class="form-control" type="date"
                                                                name="boardingFrom" />
                                                            <span class="input-group-text">to</span>
                                                            <input class="form-control" type="date" name="boardingTo" />
                                                        </div>
                                                        <div class="input-group my-3">
                                                            <span class="input-group-text">Type/breed</span>
                                                            <input class="form-control" type="text" name="dogType" />
                                                        </div>
                                                        <div class="input-group my-3">
                                                            <span class="input-group-text">Age</span>
                                                            <input class="form-control" type="text" name="dogAge" />
                                                        </div>
                                                        <select class="form-select" name="dogState">
                                                            <option selected>Choose one:</option>
                                                            <option value="intact">Intact</option>
                                                            <option value="neutered">Neutered</option>
                                                        </select>
                                                        <div class="form-check my-3">
                                                            <input class="form-check-input" type="checkbox" value="yes"
                                                                id="dogVaccinations" name="dogVaccinations">
                                                            <label class="form-check-label" for="dogVaccinations">
                                                                Vaccines completed within a year (prepare to show
                                                                documentation).
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="message" class="form-label">Message</label>
                                                <textarea class="form-control" id="message" name="message"
                                                    rows="6"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-lg g-recaptcha" type="submit"
                                                        data-sitekey="<?= $RECAPTCHA_SITE_KEY ?>"
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

    <?php include "includes/footer.php"; ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onContactUsSubmit(token) {
            var form = document.getElementById("contact-us-form");
            if (form.checkValidity()) {
                form.submit();
            } else {
                event.preventDefault()
                event.stopPropagation()
            }
        }
        function onQuoteChange() {
            var form = document.getElementById("contact-us-form");
            var quote = new FormData(form).get('quote');
            if (quote == "boarding") {
                document.getElementById('boardingDates').classList.remove('d-none');
            } else {
                document.getElementById('boardingDates').classList.add('d-none');
            }
        }
    </script>
</body>

</html>
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

                <section class="bg-light">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-lg-10 col-xl-8">
                                <p class="text-secondary mb-5 text-center">Have questions about our dog boarding
                                    services or ready to schedule your pet's stay? We're here to help! Contact us today
                                    to learn more about how we can provide a comfortable and secure home-away-from-home
                                    for your beloved canine companion.</p>
                                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row justify-content-lg-center">
                            <div class="col-12 col-lg-9">
                                <div class="bg-white border rounded shadow-sm overflow-hidden">

                                    <form action="#!">
                                        <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                                            <div class="col-12">
                                                <label for="fullname" class="form-label">Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="fullname" name="fullname"
                                                    value="" required>
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
                                                    <button class="btn btn-primary btn-lg" type="submit">Submit</button>
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
<?php if ($GLOBALS['STAGE'] != "production") { ?>
    <div class="bg-primary p-1 text-center text-white">DEVELOPMENT SERVER</div>
<?php } ?>
<nav class="navbar navbar-expand-lg bg-info" aria-label="Page navigation">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="bi bi-house-fill"></i>
            <img src="/images/brand.png" class="img-fluid" style="max-height: 28px"/>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-row-reverse" id="navbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'faqs.php' ? 'active':'' ?>" href="faqs.php">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active':'' ?>" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'active':'' ?>" href="contactus.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'aboutus.php' ? 'active':'' ?>" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/houndawayfromhome/">
                        <i class="bi bi-facebook"></i>
                        <span class="d-lg-none d-xl-none">Facebook</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.instagram.com/houndawayfromhomesm/">
                        <i class="bi bi-instagram"></i>
                        <span class="d-lg-none d-xl-none">Instagram</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.yelp.com/biz/hound-away-from-home-san-mateo">
                        <i class="bi bi-yelp"></i>
                        <span class="d-lg-none d-xl-none">Yelp</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php if ($GLOBALS['DEBUG']) { ?>
    <div class="container bg-white sticky-top">
        <div class="text-center d-block d-sm-none">xs</div>
        <div class="text-center d-none d-sm-block d-md-none">sm</div>
        <div class="text-center d-none d-md-block d-lg-none">md</div>
        <div class="text-center d-none d-lg-block d-xl-none">lg</div>
        <div class="text-center d-none d-xl-block">xl</div>
    </div>
<?php } ?>


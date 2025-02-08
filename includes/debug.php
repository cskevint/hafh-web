<?php if ($GLOBALS['DEBUG']) { ?>
    <div class="container-fluid bg-white sticky-top redbox text-center">
        <span class="fw-bold d-inline-block d-sm-none">xs</span>
        <span class="fw-bold d-none d-sm-inline-block d-md-none">sm</span>
        <span class="fw-bold d-none d-md-inline-block d-lg-none">md</span>
        <span class="fw-bold d-none d-lg-inline-block d-xl-none">lg</span>
        <span class="fw-bold d-none d-xl-inline-block">xl</span>
        <tt class="ps-5">width=<span id="width"></span></tt>
    </div>
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function () {
            window.addEventListener('resize', function () {
                document.getElementById('width').innerHTML = window.innerWidth;
            });
            document.getElementById('width').innerHTML = window.innerWidth;
        });
    </script>
<?php } ?>
<?php if ($GLOBALS['DEBUG']) { ?>
    <div class="redbox">
        <div class="container-fluid bg-white sticky-top text-center">
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
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <div class="p-1 bg-primary text-white">.bg-primary</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-secondary text-white">.bg-secondary</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-success text-white">.bg-success</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-danger text-white">.bg-danger</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-warning text-dark">.bg-warning</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-info text-white">.bg-info</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-light text-dark">.bg-light</div>
                </div>
                <div class="col">
                    <div class="p-1 bg-dark text-white">.bg-dark</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="p-1 text-primary">.text-primary</div>
                </div>
                <div class="col">
                    <div class="p-1 text-secondary">.text-secondary</div>
                </div>
                <div class="col">
                    <div class="p-1 text-success">.text-success</div>
                </div>
                <div class="col">
                    <div class="p-1 text-danger">.text-danger</div>
                </div>
                <div class="col">
                    <div class="p-1 text-warning">.text-warning</div>
                </div>
                <div class="col">
                    <div class="p-1 text-info">.text-info</div>
                </div>
                <div class="col">
                    <div class="p-1 text-light bg-dark">.text-light</div>
                </div>
                <div class="col">
                    <div class="p-1 text-dark">.text-dark</div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
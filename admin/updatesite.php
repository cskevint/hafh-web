<?php
session_start();
require_once ("../includes/config.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update site</title>
</head>

<body>
    <div class="container p-5">
        <h1 class="text-center">Redirecting to homepage in 5 seconds...</h1>
        <p class="text-center">
            <?php
                if ($GLOBALS['STAGE'] == "production") {
                    echo exec("git pull --rebase");
                }
            ?>
        </p>
        <p class="text-center">
            <a class="btn btn-primary btn-lg" href="/">Reload now</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    window.setTimeout(function() {
        window.location.href = "/";
    }, 5000);
    </script>
</body>

</html>
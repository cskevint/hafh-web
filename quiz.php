<?php
session_start();
require_once("redirect.php");
$_GLOBALS["pageTitle"] = "Quiz";
?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/navigation.php"); ?>

    <section class="container-fluid px-0 bg-info">
        <div class="container p-lg-5 p-md-4 p-3 px-0">
            <div class="p-lg-5 p-md-4 p-3">
                <div id="root"></div>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php"); ?>
    <script type="module" crossorigin src="/js/quiz/dist/assets/<?= scandir("./js/quiz/dist/assets")[2] ?>">
    </script>
</body>

</html>
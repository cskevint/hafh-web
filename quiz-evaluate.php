<?php
session_start();
require_once ("redirect.php");
$_GLOBALS["pageTitle"] = "Quiz Results";

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /quiz.php');
}

$score = 0;
foreach ($_POST as $key => $value) {
    $score += $value;
}

?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include ("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include ("includes/navigation.php"); ?>

    <section class="container-fluid px-0 bg-info">
        <div class="container p-lg-5 p-md-4 p-3 px-0">
            <div class="bg-light rounded-5 p-lg-5 p-md-4 p-3">
                <h1 class="mb-ms-5 mb-3"><?= $_GLOBALS["pageTitle"] ?></h1>

                <div class="mb-3">
                <?php
                if ($score > 10) {
                    ?>
                        <p class="lead">Dog boarding is right for you!</p>
                    <?php
                } else if ($score > 4) {
                    ?>
                        <p class="lead">Dog boarding might be good for you!</p>
                    <?php
                } else {
                    ?>
                        <p class="lead">It seems like if you make some adjustments, dog boarding could be right for you.</p>
                    <?php
                }
                ?>
                </div>
                <p>Take the <a href="quiz.php" class="text-secondary">quiz</a> again.</p>
            </div>
        </div>
    </section>

    <?php include ("includes/footer.php"); ?>
</body>

</html>
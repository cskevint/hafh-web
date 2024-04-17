<?php
$_GLOBALS["pageTitle"] = "FAQs";
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
                <h1 class="mb-5">Frequently Asked Questions</h1>

                <?php 
                include_once("lib/parsedown-1.7.4/Parsedown.php"); 
                include_once("lib/parsedown-extra-0.8.1/ParsedownExtra.php");
                $Parsedown = new ParsedownExtra();
                $faqs = file_get_contents('faqs.md');
                echo $Parsedown->text($faqs);
            ?>
            </div>
        </div>
    </section>

    <?php include("includes/footer.php");?>

</body>

</html>
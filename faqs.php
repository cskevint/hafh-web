<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php");?>
</head>

<body>

    <?php include("includes/navigation.php");?>

    <section class="container-fluid bg-light">
        <div class="container p-5">
            <h1 class="mb-5">Frequently Asked Questions</h1>

            <?php 
                include_once("lib/parsedown-1.7.4/Parsedown.php"); 
                $Parsedown = new Parsedown();
                $faqs = file_get_contents('faqs.md');
                echo $Parsedown->text($faqs);
            ?>
            
        </div>
    </section>

    <?php include("includes/footer.php");?>

</body>

</html>
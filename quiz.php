<?php
session_start();
require_once ("redirect.php");
$_GLOBALS["pageTitle"] = "Quiz";

function renderQuestion($titleVars, $options)
{
    $vars = explode("|", $titleVars);
    $title = $vars[0];
    $name = $vars[1];
    $html = "<div class=\"rounded mb-4 py-1 px-4 bg-white\">";
    $html .= "<div class=\"my-3 lead \"><strong>" . $title . "</strong></div>";

    foreach ($options as $optionVars) {
        $vars = explode("|", $optionVars);
        $text = $vars[0];
        $value = $vars[1];
        $html .= "<div class=\"form-check mb-3\">
        <input class=\"form-check-input\" id=\"" . $name . "-" . $value . "\" 
               type=\"radio\" name=\"" . $name . "\" value=\"" . $value . "\" required>
        <label class=\"form-check-label\" for=\"" . $name . "-" . $value . "\">" . $text . "</label>
    </div>";
    }
    $html .= "</div>";
    return $html;
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
            <div class="p-lg-5 p-md-4 p-3">
                <h1 class="mb-ms-5 mb-3"><?= $_GLOBALS["pageTitle"] ?></h1>

                <p class="mb-4">Take this quiz to see if running an at-home dog-boarding business is right for you!
                <p>

                <form method="post" action="quiz-evaluate.php" id="quiz-form" class="needs-validation">
                    <?= renderQuestion(
                        "Do you own your own home?|home",
                        [
                            "Yes, I own my home.|2",
                            "No, I rent and my landlord is lenient.|1",
                            "No, I rent and have a strict landlord.|0",
                        ]
                    ); ?>
                    <?= renderQuestion(
                        "Do you work from home or have a flexible job schedule?|work",
                        [
                            "Yes, I work from home or have a very flexible schedule.|2",
                            "I have a part-time job, which is quite flexible.|1",
                            "No, I work full-time with strict office hours.|0",
                        ]
                    ); ?>
                    <?= renderQuestion(
                        "Do you have strong ties to your local area and understand the community dynamics?|community",
                        [
                            "Yes, I've lived here for years and am very integrated into the community.|2",
                            "I'm relatively new but getting to know it better.|1",
                            "No, I just moved here or feel disconnected from my community.|0",
                        ]
                    ); ?>
                    <?= renderQuestion(
                        "How long have you been a dog owner or worked with dogs?|dog_experience",
                        [
                            "Over 5 years.|2",
                            "1-5 years.|1",
                            "Less than a year.|0",
                        ]
                    ); ?>
                    <?= renderQuestion(
                        "Do you own other pets that might influence your ability to host additional dogs?|dog_ability",
                        [
                            "Yes, I have other pets, but they are good with dogs.|2",
                            "Yes, I have other pets, and I'm not sure how they'll react to more dogs.|1",
                            "No, I don't own any other pets.|0",
                        ]
                    ); ?>
                    <?= renderQuestion(
                        "Are you interested in building a business from the ground up?|business",
                        [
                            "Yes, I am excited about starting and growing my own business.|2",
                            "I'm somewhat interested, but it seems daunting.|1",
                            "No, I prefer something with less commitment or that's already established.|0",
                        ]
                    ); ?>
                    <?= renderQuestion(
                        "Do you have any previous experience related to pet care or the pet industry?|pet_care",
                        [
                            "Yes, I have professional experience working with pets.|2",
                            "I've occasionally volunteered or helped friends with pet care.|1",
                            "No, I have no formal experience with pets.|0",
                        ]
                    ); ?>

                    <div class="input-group mb-3 d-grid gap-2">
                        <button class="btn btn-secondary btn-lg" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <?php include ("includes/footer.php"); ?>

</body>

</html>
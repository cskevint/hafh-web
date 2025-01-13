<?php
session_start();
require_once("redirect.php");
$_GLOBALS["pageTitle"] = "Course";

$enrollButton = <<<HTML
<p class="text-center">
    <a class="btn btn-primary btn-lg" href="http://www.google.com">Enroll now!</a>
</p>
HTML;

function renderAccordionItem($accordion, $id, $title, $contents, $show)
{
    $contentsHtml = "";
    foreach ($contents as $item) {
        $itemHtml = <<<HTML
            <div class="card mb-1">
                <div class="card-body p-2">
                    <strong>$item</strong>
                </div>
            </div>
        HTML;
        $contentsHtml .= $itemHtml;
    }
    $collapsedClass = $show ? "" : "collapsed";
    $showClass = $show ? "show" : "";
    $html = <<<HTML
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button $collapsedClass" type="button" data-bs-toggle="collapse"
                data-bs-target="#$id" aria-expanded="$show" aria-controls="$id">
                $title
            </button>
        </h2>
        <div id="$id" class="accordion-collapse collapse $showClass" data-bs-parent="#$accordion">
            <div class="accordion-body">
                $contentsHtml
            </div>
        </div>
    </div>
    HTML;
    return $html;
}

?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/devserver.php"); ?>

    <section class="container-fluid bg-info">
        <div class="container p-5">
            <h1 class="mb-3">Take our at-home dog boarding business course!</h1>

            <div class="row justify-content-md-center">
                <div class="col-md-12">

                    <iframe class="youtube-video" src="https://www.youtube.com/embed/mK9lg1l1KkU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                    <p class="mt-3">Ready to turn your love for dogs into a thriving business? Our online course
                        will tell you everything you need to know to run your own at-home dog boarding business!</p>

                    <?= $enrollButton ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="container p-5">
            <h2>Why Choose Dog Boarding?</h2>
            <p>Escape the 9-to-5 grind and enjoy the freedom of being your own boss while caring for
                adorable pups. Whether you're a stay-at-home parent or an aspiring entrepreneur, dog
                boarding offers wonderful opportunities for financial independence and personal fulfillment.
            </p>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="container p-5">
            <h2 class="mb-3">Course Outline</h2>
            <div class="accordion" id="courseOutline">
                <?php
                echo renderAccordionItem("courseOutline", "day1", "Day 1: Assessing Your Situation", [
                    "1. Introduction",
                    "2. Assessing Your Situation",
                    "3. Market Research",
                    "4. Setting Realistic Goals",
                    "5. Creating a Dream Personal Plan"
                ], false);

                echo renderAccordionItem("courseOutline", "day2", "Day 2: Transforming Your Home", [
                    "1. Introduction",
                    "2. Entryway",
                    "3. Living Rooms",
                    "4. Bedrooms",
                    "5. Feeding Station",
                    "6. Water Stations",
                    "7. Cleaning",
                    "8. Flooring",
                    "9. Outside Area"
                ], false);

                echo renderAccordionItem("courseOutline", "day3", "Day 3: Business Planning and Launching", [
                    "1. Business Plan",
                    "2. Understanding Your Local Markets",
                    "3. Branding",
                    "4. Launching on Different Platforms",
                    "5. Announcing on Social Media",
                    "6. Emailing Local Friends and Family"
                ], false);

                echo renderAccordionItem("courseOutline", "day4", "Day 4: Setting Up Your Business", [
                    "1. Introduction",
                    "2. Business Structure and Licensing",
                    "3. Setting Up Payment Systems",
                    "4. Insurance, Liability, Contracts and Policies",
                    "5. Building Community Relationships",
                    "6. Setting Up an Online Presence"
                ], false);

                echo renderAccordionItem("courseOutline", "day5", "Day 5: Client Relations and Communication", [
                    "1. Introduction",
                    "2. New Client Onboarding",
                    "3. Establishing Professional Communication",
                    "4. Utilizing Social Media",
                    "5. Building and Strengthening Client Relationships"
                ], false);

                echo renderAccordionItem("courseOutline", "day6", "Day 6: Understanding Dog Behavior", [
                    "1. Introduction",
                    "2. The Meet and Greet",
                    "3. Assessing and Welcoming Dogs",
                    "4. Managing Group Dynamics and Socialization",
                    "5. Behavioral Guidance and Training",
                    "6. Understanding Dog Communication and Stress"
                ], false);

                echo renderAccordionItem("courseOutline", "day7", "Day 7: Emergency and Special Situations", [
                    "1. Introduction",
                    "2. Handling Dog Behavior Issues",
                    "3. Emergency Situations with Dogs",
                    "4. Situational and Environmental Challenges",
                    "5. Personal Emergencies and Backup Plans"
                ], false);

                echo renderAccordionItem("courseOutline", "day8", "Day 8: Scaling your Business", [
                    "1. Introduction",
                    "2. Expanding Service Offerings",
                    "3. Creating Value-Added Packages",
                    "4. Specialized and Premium Services",
                    "5. Supplementary Revenue Streams"
                ], false);

                echo renderAccordionItem("courseOutline", "day9", "Day 9: Financial Management", [
                    "1. Introduction",
                    "2. Organizing Financial Foundations",
                    "3. Tax Considerations",
                    "4. Budgeting and Planning",
                    "5. Financial Operations"
                ], false);
                ?>
            </div>
        </div>
    </section>

    <?php
    $coach1 = <<<STR
        Hi, I’m Selena Trotter, and I’ve been running a successful at-home dog boarding business since 2012. It all started one summer during a break from my high school teaching career when I began looking after dogs. What began as a side hustle quickly became a fulfilling, full-time business that allowed me to stay home -all while earning a great income. Since then, I’ve cared for over 1,000 dogs, creating a safe, loving, and happy environment.
        STR;
    $coach2 = <<<STR
        Running this business has given me the freedom to raise my kids at home and involve them in the work, teaching them responsibility and the value of caring for others. Over the years, I’ve learned the ins and outs of managing a successful dog boarding business, from handling unique challenges to enjoying the incredible rewards. 
        STR;
    $coach3 = <<<STR
        With my background in teaching and executive coaching, I bring a wealth of experience in guiding others to success. My practical, supportive approach is designed to help you achieve financial independence, time flexibility, and a deep sense of fulfillment. Whether you’re looking to supplement your income or create a full-time career, I’m here to share everything to help you get started, avoid pitfalls, and find joy in building a business centered around the love of dogs.
        STR;
    ?>
    <section class="container-fluid bg-light">
        <div class="container p-5">
            <h2>Meet your coach</h2>
            <div class="row">
                <div class="col-7">
                    <p><?= $coach1 ?></p>
                    <p><?= $coach2 ?></p>
                    <p><?= $coach3 ?></p>
                </div>
                <div class="col-5">
                    <img src="images/image-selena-alone.jpg" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="container p-5">
            <h2>Ready to Get Started?</h2>
            <p>Click the Enroll button below to navigate to the enrollment page on our elearning platform:
            </p>
            <?= $enrollButton ?>
        </div>
    </section>

    <?php include("includes/bootstrapjs.php"); ?>

</body>

</html>
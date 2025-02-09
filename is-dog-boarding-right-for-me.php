<?php
session_start();

require_once "redirect.php";
require_once "includes/utility.php";
require_once "includes/quiz-data.php";

$_GLOBALS["pageTitle"] = "Take a quiz!";
$_GLOBALS["pageDescription"] = "Take a quiz to find out if at-home dog-boarding right for you?";

$quiz = $DOG_BOARDING_QUIZ;
$currentQuestionId = $_REQUEST["question"] ?? 0;
$currentQuestion = $quiz["questions"][$currentQuestionId] ?? null;

if ($currentQuestionId == 0) {
    unset($_SESSION["quiz"]);
}
if (isset($_REQUEST["previousQuestion"]) && isset($_REQUEST["previousAnswer"])) {
    $_SESSION["quiz"][$_REQUEST["previousQuestion"]] = $_REQUEST["previousAnswer"];
}

function enrollButton($text) {
    return <<<HTML
        <div class="text-center">
            <a href="/enroll"
                class="btn btn-lg btn-primary text-nowrap px-4 my-3 rounded-pill shadow">
                $text
            </a>
        </div>
    HTML;
}
function getNextQuestionId()
{
    global $currentQuestionId, $quiz, $currentQuestion;
    if ($currentQuestionId == count($quiz["questions"]) - 1) {
        return "EMAIL";
    } else if ($currentQuestion != null) {
        return $currentQuestionId + 1;
    }
}

function getRenderState(): string
{
    global $currentQuestionId, $quiz;
    $totalQuestions = count($quiz["questions"]);
    if (
        !in_array($currentQuestionId, ["EMAIL", "DONE"]) &&
        ($currentQuestionId < 0 || $currentQuestionId >= $totalQuestions)
    ) {
        header("Location: 404.php");
        exit();
    }
    if ($currentQuestionId == "DONE" && count($_SESSION['quiz']) < $totalQuestions) {
        header("Location: " . setUrlParam(getCurrentUrl(), [], true));
        exit();
    }
    if ($currentQuestionId == "EMAIL") {
        return "email";
    }
    if (!isset($_SESSION['quiz']) || count($_SESSION['quiz']) != $totalQuestions) {
        return "unfinished";
    }
    if (
        $_SESSION['quiz']["home"] == "rent-strict" ||
        $_SESSION['quiz']["work"] == "strict-hours"
    ) {
        return "learn-more";
    } else if (
        $_SESSION['quiz']["pet_care"] == "professional" ||
        $_SESSION['quiz']["business"] == "excited"
    ) {
        return "success";
    }
    return "consider";
}

$renderState = getRenderState();

?>
<!doctype html>
<html lang="en" class="bg-secondary">

<head>
    <?php include "includes/head-tag-contents.php"; ?>
</head>

<body>

    <?php include "includes/devserver.php"; ?>
    <?php include "includes/debug.php"; ?>

    <section class="container-fluid bg-primary">
        <div class="<?= $currentQuestionId == 0 ? "" : "d-none" ?> container p-2">
            <div class="d-flex justify-content-center">
                <a href="/">
                    <img src="images/logo-transparent.png" alt="Hound Away From Home" style="max-height:200px;" />
                </a>
            </div>
            <p class="text-center text-white p-2">Is dog-boarding right for you? Take a quiz to find out!</p>
        </div>
        <div class="<?= $currentQuestionId != 0 ? "" : "d-none" ?> container p-2">
            <div class="d-flex justify-content-center">
                <a href="/">
                    <img src="images/logo-transparent.png" alt="Hound Away From Home" style="max-height:100px;" />
                </a>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="container p-0 py-3 p-md-4 p-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="rounded mb-4 py-md-1 px-md-4 bg-white">
                        <?php if ($renderState == "unfinished" && $currentQuestion) { ?>

                            <h2 class="my-3 lead fs-1 fw-bold text-center">
                                <?= $currentQuestion["title"] ?>
                            </h2>
                            <div class="text-center">
                                <?php foreach ($currentQuestion["options"] as $option) { ?>
                                    <div class="mb-3 p-md-1 ps-md-4">
                                        <a href="<?= setUrlParam(getCurrentUrl(), [
                                            "question" => getNextQuestionId(),
                                            "previousQuestion" => $currentQuestion["name"],
                                            "previousAnswer" => $option["value"]
                                        ]) ?>" class="btn btn-lg btn-outline-primary p-4">
                                            <?= $option["text"] ?>
                                        </a>
                                    </div>
                                <?php } ?>
                            </div>

                        <?php } ?>

                        <div class="<?= $renderState == "email" ? "" : "d-none" ?> text-center">

                            <h3 class="py-2 text-muted">To get your results, provide your name and email:</h3>
                            <div class="row mb-5">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <form method="post" action="contact-capture.php?redirect=quiz" id="quiz-form">
                                        <div class="input-group input-group-lg mb-3">
                                            <input class="form-control" type="text" placeholder="Your name" name="name"
                                                aria-label="Your name" required />
                                        </div>
                                        <div class="input-group input-group-lg mb-3">
                                            <input class="form-control" type="email" placeholder="Your email address"
                                                name="email" aria-label="Your email address" required />
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                Get my results!
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-3"></div>
                            </div>

                        </div>

                        <div class="<?= $renderState == "success" ? "" : "d-none" ?>">

                            <h3>Congratulations!</h3>
                            <p>You’re ready to turn your love for dogs into unlimited earnings! &#128062; &#128188;
                            </p>
                            <p> Your results show that you have what it takes to <b> start earning as much as you
                                    want</b> with your very own home-based dog-care business. &#127881; </p>
                            <p>Why wait? This is your moment:</p>
                            <ul>
                                <li> &#128054; <b>You’re the perfect fit:</b> Passionate about dogs, curious, and
                                    ready to succeed. </li>
                                <li> &#128176; <b>The sky’s the limit:</b> With the right strategies, you can
                                    transform this business into a stable and growing income stream. </li>
                                <li> &#127969; <b>Work from home:</b> Turn your space into a cozy haven for your
                                    furry clients. </li>
                            </ul>
                            <p> With the <b>Hound Away From Home course</b>, you’ll learn not just how to care for
                                dogs, but how to turn that passion into a profitable and scalable business. </p>
                            <p> &#10024; <b>What’s in store for you?</b> </p>
                            <ul>
                                <li>Proven strategies to find clients easily.</li>
                                <li>Tips for managing multiple dogs with confidence.</li>
                                <li>Techniques to maximize your income from day one.</li>
                            </ul>
                            <p class="fw-bold">Ready to start earning?</p>
                            <?= enrollButton("&#128073; Join the course now and get an exclusive discount for a limited time!") ?>
                            <p>The time to build a business you love and control your income is <b> right now</b>.
                                You’ve got this! &#128588; &#128062; </p>

                        </div>

                        <div class="<?= $renderState == "consider" ? "" : "d-none" ?>">

                            <h3>You’re Almost There!</h3>
                            <p>Just one step away from being ready to succeed! &#128062; &#10024;</p>
                            <p>Your results show that you’re so close to turning your love for dogs into a
                                successful business. All you need now is a little extra guidance—and that’s exactly
                                what we’ve prepared for you! </p>
                            <p class="fw-bold">Take the Leap with Hound Away From Home: </p>
                            <p> In just <b>9 days</b>, this course will show you everything you need to know to feel
                                confident, prepared, and ready to start earning while doing what you love. </p>
                            <p>What You’ll Learn:</p>
                            <ul>
                                <li>&#128021; How to set up your home for dog boarding like a pro.</li>
                                <li> &#128188; Business strategies to get your first clients and grow. </li>
                                <li> &#128062; Dog behavior insights to make every stay safe and joyful. </li>
                            </ul>
                            <p><b>This is the perfect time to take that final step</b> and turn your dream into a
                                reality. With the tools, tips, and techniques you’ll gain in this course, you’ll
                                feel ready to welcome your first clients and start building your dog-care business.
                            </p>
                            <p class="fw-bold">Ready to start your journey?</p>
                            <?= enrollButton("&#128073; Join now and transform your passion into a business in just 9 days!") ?>
                            <p>You’re closer than ever—let’s make it happen together! &#128054; &#128188; </p>

                        </div>

                        <div class="<?= $renderState == "learn-more" ? "" : "d-none" ?>">

                            <h3>Not Ready Yet?</h3>
                            <p>That’s Okay—We’ll Get You There! &#128062; &#128640;</p>
                            <p>Your results show that you might not feel fully ready to dive into a dog-care
                                business just yet, but if you dream of achieving financial independence and want to
                                start building something of your own, <b> we’re here to help!</b> </p>
                            <p>With the <b>Hound Away From Home course</b>, you’ll learn everything you need to:</p>
                            <ul>
                                <li> &#128021; Start your business on the right scale for your current lifestyle.
                                </li>
                                <li> &#128161; Gain the confidence and knowledge to grow step by step. </li>
                                <li> &#127969; Build a foundation that sets you up for long-term success. </li>
                            </ul>
                            <p>This course is designed for anyone—whether you’re starting from scratch or looking to
                                learn the basics— <b>to help you create a thriving dog-care business at your own
                                    pace.</b> </p>
                            <p class="fw-bold"> Take the First Step Today: </p>
                            <p>In just <b>9 days</b>, you’ll have the tools and confidence to: </p>
                            <ul>
                                <li>Launch your business at a manageable scale.</li>
                                <li>Learn how to care for dogs while balancing your time.</li>
                                <li>Start earning and growing your business as you gain experience.</li>
                            </ul>
                            <p class="fw-bold">Your journey starts here:</p>
                            <?= enrollButton(" &#128073; Sign up now and let us help you turn your dreams into a reality!") ?>
                            <p>Everyone starts somewhere, and with the right guidance, you can build a business that
                                grows alongside you. <b> Let’s take that first step together.</b> &#128054; &#10024;
                            </p>

                        </div>
                        <div class="mt-5 d-flex justify-content-center align-items-center">
                            <a href="<?= setUrlParam(getCurrentUrl(), [], true) ?>" class="btn btn-light">
                                Start over
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container-fluid bg-secondary">
        <div class="container p-3">
            <p class="fw-light text-light" style="font-size:0.8em;">
                This site is not a part of the Google website or Google Inc., Facebook/Meta website, or Meta, Inc.
                Additionally, this site is NOT endorsed by Google or Meta in any way. Amazon and all related marks are
                trademarks of Amazon.com, Inc. or its affiliates. Publishing.com is not affiliated with or endorsed by
                Amazon.com, Inc. or its affiliates. </p>
            <p class="fw.light text-light fs-6 text-center">&copy; 2025 HoundAwayFromHome.com. All rights reserved.
            </p>
        </div>
    </section>

    <?php include "includes/bootstrapjs.php"; ?>
</body>

</html>
<?php
session_start();
require_once("redirect.php");
$_GLOBALS["pageTitle"] = "Course";

$enrollButton = <<<HTML
<p class="text-center">
    <a class="btn btn-primary btn-lg" href="http://www.google.com" role="button">Enroll now!</a>
</p>
HTML;

$pageContainerClasses = "container p-lg-5 p-md-4 p-3";

?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/devserver.php"); ?>
    <?php include("includes/debug.php"); ?>

    <section class="container-fluid bg-info">
        <div class="container p-2 d-flex justify-content-center">
            <a href="/">
                <img src="images/logo-horizontal.png" alt="Hound Away From Home" style="max-height:32px;" />
            </a>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="<?=$pageContainerClasses?>">
            <h1 class="mb-3">Take our at-home dog boarding business course!</h1>
            <p class="mt-3">Ready to turn your love for dogs into a thriving business? Our online course
                        will tell you everything you need to know to run your own at-home dog boarding business!</p>
            <div class="row">
                <div class="col-md-8">
                    <iframe class="youtube-video" src="https://www.youtube.com/embed/mK9lg1l1KkU"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-4 text-center">
                    <h3 class="text-primary fw-bold">Pre-launch Sale!</h3>
                    <p>Join our exclusive pre-launch sale! Join now to get <u>lifetime access</u> and take advantage of
                        75% off, early access to the course, free access to our dogboarders community with questions
                        answered daily, and more!<br/>
                        <u>Offer Expires Soon!</u></p>
                    <?= $enrollButton ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="<?=$pageContainerClasses?>">
            <h2>Why Choose Dog Boarding?</h2>
            <p>Escape the 9-to-5 grind and enjoy the freedom of being your own boss while caring for
                adorable pups. Whether you're a stay-at-home parent or an aspiring entrepreneur, dog
                boarding offers wonderful opportunities for financial independence and personal fulfillment.
            </p>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="<?=$pageContainerClasses?>">
            <h2 class="mb-3">Course Outline</h2>
            <!-- <div class="accordion-option d-flex justify-content-between align-items-center">
                <h2 class="mb-3">Course Outline</h2>
                <a href="javascript:void(0)" class="toggle-accordion active" accordion-id="#courseOutline"></a>
            </div> -->
            <p>Our comprehensive course covers everything you need to know to start and run a successful
                at-home dog boarding business. Here's a sneak peek at what you'll learn:</p>
            <div id="courseOutline">
                <?php
                function renderAccordionItem($accordion, $id, $title, $contents, $show): string
                {
                    $contentsHtml = "";
                    foreach ($contents as $items) {
                        $itemHtml = <<<HTML
                        <div class="card mb-1">
                            <div class="card-body p-1">
                                <p class="mx-1 m-0 fw-bold">$items[0]</>
                                <p class="mx-1 my-1 fw-light fs-6">$items[1]</p>
                            </div>
                        </div>
                        HTML;
                        $contentsHtml .= $itemHtml;
                    }
                    $showClass = $show ? "show" : "";
                    $ariaExpanded = $show ? "true" : "false";
                    $html = <<<HTML
                    <div class="card mb-1">
                        <div class="card-header" role="tab" id="$id">
                            <a class="link-primary text-decoration-none" role="button" data-bs-toggle="collapse" 
                                data-parent="#$accordion" href="#$id-button"
                                aria-expanded="$ariaExpanded" aria-controls="$id-button">
                            <strong>$title</strong>
                            </a>
                        </div>
                        <div class="card-body collapse $showClass" id="$id-button" role="tabpanel" aria-labelledby="$id">
                            $contentsHtml
                        </div>
                    </div>
                    HTML;
                    return $html;
                }

                echo renderAccordionItem("courseOutline", "day1", "Day 1: Assessing Your Situation", [
                    ["Lesson 1 - Introduction", "Welcome to the course! This session will set the foundation for starting your dog-sitting business. Learn what to expect and how to build confidence in your ability to succeed."],
                    ["Lesson 2 - Assessing Your Situation", "Analyze your home, time, family dynamics, and community resources to understand how they align with your dog-sitting goals."],
                    ["Lesson 3 - Market Research", "Explore your local market to determine demand, competitive pricing, and the types of services offered. Then, learn how to stand out and provide value to your customers."],
                    ["Lesson 4 - Setting Realistic Goals", "Define your ability to care for a number of dogs, your income expectations, and your personal priorities. Balance your business ambitions with your lifestyle and family needs."],
                    ["Lesson 5 - Creating a Dream Personal Plan", "Combine all of this information into a personal plan that combines business goals, financial needs, and the life you want to create for yourself and your family."],
                ], false);

                echo renderAccordionItem("courseOutline", "day2", "Day 2: Transforming Your Home", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - Entryway", ""],
                    ["Lesson 3 - Living Rooms", ""],
                    ["Lesson 4 - Bedrooms", ""],
                    ["Lesson 5 - Feeding Station", ""],
                    ["Lesson 6 - Water Stations", ""],
                    ["Lesson 7 - Outside Area", ""],
                    ["Lesson 8 - Flooring", ""],
                    ["Lesson 9 - Cleaning", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day3", "Day 3: Business Planning and Launching", [
                    ["Lesson 1 - Business Plan", ""],
                    ["Lesson 2 - Understanding Your Local Markets", ""],
                    ["Lesson 3 - Branding", ""],
                    ["Lesson 4 - Launching on Different Platforms", ""],
                    ["Lesson 5 - Announcing on Social Media", ""],
                    ["Lesson 6 - Emailing Local Friends and Family", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day4", "Day 4: Setting Up Your Business", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - Business Structure and Licensing", ""],
                    ["Lesson 3 - Setting Up Payment Systems", ""],
                    ["Lesson 4 - Insurance, Liability, Contracts and Policies", ""],
                    ["Lesson 5 - Building Community Relationships", ""],
                    ["Lesson 6 - Setting Up an Online Presence", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day5", "Day 5: Client Relations and Communication", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - New Client Onboarding", ""],
                    ["Lesson 3 - Establishing Professional Communication", ""],
                    ["Lesson 4 - Utilizing Social Media", ""],
                    ["Lesson 5 - Building and Strengthening Client Relationships", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day6", "Day 6: Understanding Dog Behavior", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - The Meet and Greet", ""],
                    ["Lesson 3 - Assessing and Welcoming Dogs", ""],
                    ["Lesson 4 - Managing Group Dynamics and Socialization", ""],
                    ["Lesson 5 - Behavioral Guidance and Training", ""],
                    ["Lesson 6 - Understanding Dog Communication and Stress", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day7", "Day 7: Emergency and Special Situations", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - Handling Dog Behavior Issues", ""],
                    ["Lesson 3 - Emergency Situations with Dogs", ""],
                    ["Lesson 4 - Situational and Environmental Challenges", ""],
                    ["Lesson 5 - Personal Emergencies and Backup Plans", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day8", "Day 8: Scaling your Business", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - Expanding Service Offerings", ""],
                    ["Lesson 3 - Creating Value-Added Packages", ""],
                    ["Lesson 4 - Specialized and Premium Services", ""],
                    ["Lesson 5 - Supplementary Revenue Streams", ""],
                ], false);

                echo renderAccordionItem("courseOutline", "day9", "Day 9: Financial Management", [
                    ["Lesson 1 - Introduction", ""],
                    ["Lesson 2 - Organizing Financial Foundations", ""],
                    ["Lesson 3 - Tax Considerations", ""],
                    ["Lesson 4 - Budgeting and Planning", ""],
                    ["Lesson 5 - Financial Operations", ""],
                ], false);
                ?>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="<?=$pageContainerClasses?>">
            <h2 class="mb-4">Testimonials</h2>
            <p class="mb-3">
                Hear from our students who have successfully launched their own dog boarding businesses
                after taking our course.
            </p>
            <?php
            $fiveStars = <<<HTML
            <ul class="list-unstyled d-flex justify-content-center mb-0">
                <li>
                    <i class="bi bi-star-fill text-secondary"></i>
                </li>
                <li>
                    <i class="bi bi-star-fill text-secondary"></i>
                </li>
                <li>
                    <i class="bi bi-star-fill text-secondary"></i>
                </li>
                <li>
                    <i class="bi bi-star-fill text-secondary"></i>
                </li>
                <li>
                    <i class="bi bi-star-fill text-secondary"></i>
                </li>
            </ul>
            HTML;
            ?>
            <div class="row text-center">
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                            class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Leila Gates</h5>
                    <h6 class="text-primary mb-3">Teacher</h6>
                    <p class="px-xl-3">
                        <i class="bi bi-quote pe-2"></i>Selena knows her stuff! With over a decade of experience in
                        the business and a lifetime of loving dogs, she offers the tools you'll need to start a
                        successful dog business. I’ve been working with her for over a year since before I got my first
                        guest, to now where I have dozens of repeat clients. I'm grateful for her mentorship and highly
                        recommend her course!
                    </p>
                    <?= $fiveStars ?>
                </div>
                <div class="col-md-6 mb-5 mb-md-0">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                            class="rounded-circle shadow-1-strong" width="150" height="150" />
                    </div>
                    <h5 class="mb-3">Sara Botero</h5>
                    <h6 class="text-primary mb-3">UX Designer</h6>
                    <p class="px-xl-3">
                        <i class="bi bi-quote pe-2"></i>
                        Honestly, I thought that doing the dog business would not require much knowledge, it could be
                        intuitive, but when I started receiving information from Selena, I realized that I needed
                        valuable information that only she had because of her experience. I felt taken by the hand and
                        when we received the first dog (only 5 days after starting the course) everything made so much
                        sense, when you do it, the experience that she has, becomes very evident, and you feel with the
                        ability to solve the small challenges. Today I feel very happy, I have the size of a business
                        that fits my family and that pays the rent.
                    </p>
                    <?= $fiveStars ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="<?=$pageContainerClasses?>">
            <h2>Meet your coach</h2>
            <div class="row">
                <div class="col-md-7">
                    <?php
                    $coachLines = [
                        "Hi, I’m Selena Trotter, and I’ve been running a successful at-home dog boarding business since 2012. It all started one summer during a break from my high school teaching career when I began looking after dogs. What began as a side hustle quickly became a fulfilling, full-time business that allowed me to stay home -all while earning a great income. Since then, I’ve cared for over 1,000 dogs, creating a safe, loving, and happy environment.",
                        "Running this business has given me the freedom to raise my kids at home and involve them in the work, teaching them responsibility and the value of caring for others. Over the years, I’ve learned the ins and outs of managing a successful dog boarding business, from handling unique challenges to enjoying the incredible rewards.",
                        "With my background in teaching and executive coaching, I bring a wealth of experience in guiding others to success. My practical, supportive approach is designed to help you achieve financial independence, time flexibility, and a deep sense of fulfillment. Whether you’re looking to supplement your income or create a full-time career, I’m here to share everything to help you get started, avoid pitfalls, and find joy in building a business centered around the love of dogs."
                    ];
                    foreach ($coachLines as $paragraph) {
                        echo <<<HTML
                            <p>$paragraph</p>
                        HTML;
                    }
                    ?>
                </div>
                <div class="col-md-5 py-2 order-md-first order-lg-last">
                    <img src="images/image-selena-alone.jpg" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="<?=$pageContainerClasses?>">
            <h2>Who is this course for</h2>
            <?php
            $whoForLines = [
                "This course is perfect for anyone who dreams of making money while staying home and doing what they love—caring for dogs. Whether you’re a stay-at-home parent, someone planning to transition into being home full-time, a remote worker, or a retiree looking to earn extra income while filling your days with dog cuddles, this course is for you. Above all, it’s for people who love dogs and have some prior experience with their care.",
                "If you’ve ever wondered how to turn your love of dogs into a thriving business, this course addresses all the key challenges. From setting up your home for safety to attracting clients and ensuring a happy, healthy environment for the dogs, you’ll gain the tools and strategies needed to succeed. We understand the fears of dog fights or endless cleaning and provide practical solutions to make your experience enjoyable and stress-free."
            ];
            foreach ($whoForLines as $paragraph) {
                echo <<<HTML
                    <p>$paragraph</p>
                HTML;
            }
            ?>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="<?=$pageContainerClasses?>">
            <h2>Who is this course not for</h2>
            <?php
            $whoNotForLines = [
                "While this course is designed to help many people succeed in building an at-home dog boarding business, it’s not the right fit for everyone. If you don’t have prior experience with dogs—whether as a pet owner or caregiver—this might not be the right starting point for you. Caring for dogs requires understanding their behavior and needs, which isn’t fully covered in this course.",
                "This business also requires a level of commitment to be present with the dogs in your care. If you’re someone who can’t dedicate time to being home or doesn’t have a support system to manage the business during your absences, this course may not work for you. Additionally, if you’re not comfortable with the responsibilities that come with dog care—like cleaning, managing occasional behavioral challenges, or spending quality time with the dogs—this may not be the right venture for you.",
                "Lastly, if you think you can simply set up a space and leave the dogs on their own, this business likely isn’t a good fit. Successful dog boarding requires interaction, care, and a genuine love for dogs. However, if you’re ready to embrace the joys and occasional messiness of working with dogs and are willing to put in the time to create a safe and loving home environment, this course will provide you with all the tools you need to thrive."
            ];
            foreach ($whoNotForLines as $paragraph) {
                echo <<<HTML
                    <p>$paragraph</p>
                HTML;
            }
            ?>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="<?=$pageContainerClasses?>">
            <h3 class="text-center mb-4 pb-2 text-primary fw-bold">Frequently asked questions</h3>

            <div class="row">
                <?php
                $questions = [
                    ["person", "Who is this course designed for?", "This course is for people who want to stay home more and love dogs. Whether you're a stay-at-home parent, remote worker, retiree, or simply looking for a fulfilling way to earn income, this course is for you."],
                    ["cart-fill", "Do I need to have business experience to take this course?", "No, you don’t need any prior business experience. This course will guide you step-by-step through everything you need to know."],
                    ["house-door-fill", "Do I need to own my home to start a dog boarding business?", "No, but you’ll need permission from your landlord if you’re renting. If owning isn’t an option, you can still explore related opportunities like dog walking or in-home dog sitting for others."],
                    ["clock-fill", "How much time do I need to dedicate to running this type of business?", "A few hours a day are needed to play with, clean up after, and feed the dogs. Simply being present with them is essential but doesn’t require extra effort."],
                    ["tag-fill", "What upfront costs should I expect to get started?", "If you already own a dog, your upfront costs will likely be minimal—maybe a few additional gates, bowls, beds, or cleaning supplies."],
                    ["book-fill", "Will this course teach me how to handle dog behavior issues?", "The course will help you assess whether a dog is a good fit to avoid behavior issues. It also teaches how to set up your home to minimize potential problems, but it doesn’t cover correcting existing behavioral issues."],
                    ["display-fill", "Can I run this business if I have a full-time remote job?", "Yes, as long as you’re home and able to supervise and care for the dogs, this business is a great fit for remote workers."],
                    ["currency-dollar", "How quickly can I start making money after completing the course?", "You can start getting clients even before finishing the course. The early sections focus on setting up your home and attracting clients, so you can begin earning quickly."],
                    ["tree-fill", "What if I live in a rural area—can I still succeed?", "Yes! While attracting daycare clients might be more challenging, many people are willing to travel for the unique experience of having their dogs cared for in a spacious, natural setting."],
                    ["person-walking", "Will this course help me get clients?", "Absolutely. The course includes strategies and templates to help you effectively advertise and attract clients."],
                    ["tools", "What tools or resources are included in the course?", "You’ll get business plan templates, income and expense tracking sheets, advertising templates, and more resources as the course grows."],
                    ["receipt", "Do I need any certifications or licenses to start a dog boarding business?", "Depending on your location, you may need a business permit. Be sure to check your local requirements."],
                    ["airplane-fill", "What happens if I need to take a break or go on vacation?", "You can pause your business at any time or find someone to cover for you while you’re away."],
                    ["wifi", "How is this course delivered?", "The course is delivered through pre-recorded video lessons, so you can learn at your own pace."],
                    ["person", "What kind of support will I have during and after the course?", "You’ll have access to a supportive community where you can ask questions and connect with me directly."],
                    ["coin", "Is there a money-back guarantee if I’m not satisfied?", "Yes, we offer a money-back guarantee if you’re not happy with the course."]
                ];
                foreach ($questions as $question) {
                    $icon = $question[0];
                    $questionTitle = $question[1];
                    $questionAnswer = $question[2];
                    echo <<<HTML
                        <div class="col-md-6 col-lg-6 mb-4">
                        <h6 class="mb-3 text-primary">
                            <strong><i class="bi bi-$icon"></i> $questionTitle</strong>
                        </h6>
                        <p>$questionAnswer</p>
                    </div>
                    HTML;
                }
                ?>
            </div>
        </div>
    </section>

    <section class="container-fluid bg-info">
        <div class="<?=$pageContainerClasses?>">
            <h2>Ready to Get Started?</h2>
            <p>Click the Enroll button below to navigate to the enrollment page on our elearning platform:
            </p>
            <?= $enrollButton ?>
        </div>
    </section>

    <section class="container-fluid bg-light">
        <div class="<?=$pageContainerClasses?>">
            <h2>Disclaimer</h2>
            <?php
            $disclaimers = [
                ["Legal and Financial Disclaimer", "This course does not guarantee financial success or specific income levels. While the course provides strategies to help you attract clients, the amount of money you earn will depend on various factors, including your location, your home setup, and your prior experience. Results may vary based on individual effort and circumstances. Starting a dog boarding business involves inherent risks, as dogs are animals and cannot be fully controlled. The course will set you up for success, but it is your responsibility to avoid situations that could put you or the dogs in your care at risk."],
                ["Licensing and Legal Requirements", "Participants are solely responsible for ensuring they comply with all local laws, permits, and regulations required to operate a dog boarding business in their area. While the course provides general guidance on city and county permitting, as well as information on filing taxes and setting up your business, it does not constitute legal advice. It is up to you to ensure all necessary legal and regulatory requirements are met."],
                ["Health and Safety Disclaimer", "You are fully responsible for ensuring the safety of your home and the dogs in your care. While the course offers guidance on assessing dog behavior and creating a safe environment, the final decisions and responsibilities lie with you."],
                ["Intellectual Property", "All course content, including templates, resources, and videos, is for personal use only. Redistribution, resale, or unauthorized sharing of the materials is strictly prohibited."],
                ["Course Limitations", "This course covers the basics of starting and running a dog boarding business but does not include advanced training in dog behavior, medical care, or other specialized areas. If you wish to pursue further certifications, additional training may be required. All advice provided is based on personal experience and does not constitute professional certification in animal behavior or care."],
                ["Refund Policy", "We stand behind the value of this course. However, if you are unable to secure clients or determine that this business is not the right fit for you, we offer a money-back guarantee. Specific details of the refund policy will be outlined at the time of purchase."]
            ];
            foreach ($disclaimers as $item) {
                $title = $item[0];
                $body = $item[1];
                echo <<<HTML
                    <strong class="text-primary">$title</strong>
                    <p>$body</p>
                HTML;
            }
            ?>
        </div>
    </section>

    <?php include("includes/bootstrapjs.php"); ?>

</body>

</html>
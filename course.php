<?php
session_start();
require_once("redirect.php");
$_GLOBALS["pageTitle"] = "Course";

$bgCounter = 0;
function alternatingBgClass()
{
    $GLOBALS['bgCounter']++;
    return $GLOBALS['bgCounter'] % 2 == 0 ? "bg-light" : "bg-info";
}

$pageContainerClasses = "container p-lg-5 p-md-4 p-3";

$enrollButton = <<<HTML
<p class="text-center">
    <a class="btn btn-primary btn-lg" href="http://www.google.com" role="button">Enroll now!</a>
</p>
HTML;

?>
<!doctype html>
<html lang="en" class="bg-info">

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/devserver.php"); ?>
    <?php include("includes/debug.php"); ?>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="container p-2 d-flex justify-content-center">
            <a href="/">
                <img src="images/logo-horizontal.png" alt="Hound Away From Home" style="max-height:32px;" />
            </a>
        </div>
    </section>

    <section class="container-fluid header-bg">
        <div class="<?= $pageContainerClasses ?>">
            <h1 class="mb-3">Turn your love for dogs into a profitable, flexible career!</h1>
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
                        answered daily, and more!<br />
                        <u>Offer Expires Soon!</u>
                    </p>
                    <?= $enrollButton ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
            <h2>Why Choose Dog Boarding?</h2>
            <p>Escape the 9-to-5 grind and enjoy the freedom of being your own boss while caring for
                adorable pups. Whether you're a stay-at-home parent or an aspiring entrepreneur, dog
                boarding offers wonderful opportunities for financial independence and personal fulfillment.
            </p>
        </div>
    </section>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <?php
        $whatYoullLearn = [
            [
                "Setting Up for Success",
                [
                    "Learn how to evaluate your space, resources, and legal steps for starting a dog boarding business.",
                    "Create a safe, welcoming environment for dogs while maintaining your home's comfort.",
                    "Access worksheets, sample spreadsheets, and contracts to help plan and organize your business."
                ]
            ],
            [
                "Running and Growing Your Business",
                [
                    "Develop a business plan, branding strategies, and methods for attracting clients.",
                    "Master client relations and ensure a peaceful environment for dogs in your care.",
                    "Utilize customizable flyers, contracts, and tools to streamline business operations and scaling."
                ]
            ],
            [
                "Handling Challenges and Special Situations",
                [
                    "Gain insights into dog behavior and how to manage emergencies and special care situations.",
                    "Learn techniques to maintain safety and wellbeing for dogs in your care.",
                    "Access practical templates and protocols to handle special situations with confidence."
                ]
            ]
        ];
        ?>
        <div class="<?= $pageContainerClasses ?>">
            <h2 class="mb-5">What you'll learn in this course</h2>
            <?php
            foreach ($whatYoullLearn as $item) {
                $title = $item[0];
                $contents = $item[1];
                $contentsHtml = "";
                foreach ($contents as $content) {
                    $contentsHtml .= "<li>$content</li>\n";
                }
                echo <<<HTML
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <h3 class="text-secondary">$title</h3>
                        <ul>$contentsHtml</ul>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center justify-content-center" style="background-color:gray;">
                        <span>Animated GIF of Lesson Video</span>
                    </div>
                </div>
                HTML;
            }
            ?>
    </section>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
            <div class="accordion-option d-flex justify-content-between align-items-center">
                <h2 class="mb-3">Course Outline</h2>
                <a href="javascript:void(0)" class="toggle-accordion" accordion-id="#courseOutline"></a>
            </div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    document.querySelector(".toggle-accordion").addEventListener("click", function (event) {
                        var accordionId = event.target.getAttribute("accordion-id");
                        var accordionElem = document.querySelector(accordionId);
                        accordionElem.querySelectorAll(".collapse").forEach(function (collapseElem) {
                            if (event.target.classList.contains("active")) {
                                collapseElem.classList.remove("show");
                                collapseElem.parentElement.querySelector(".link-primary").setAttribute("aria-expanded", "false");
                            } else {
                                collapseElem.classList.add("show");
                                collapseElem.parentElement.querySelector(".link-primary").setAttribute("aria-expanded", "true");
                            }
                        });
                        event.target.classList.toggle("active");
                    });
                });
            </script>
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
                    ["Lesson 1 - Introduction", "Discover how to prepare your home to create a safe, functional, and inviting environment for dogs and their owners."],
                    ["Lesson 2 - Entryway", "Design a secure and welcoming entryway with double layers of separation, organized storage, and safety features like cameras and secure locks."],
                    ["Lesson 3 - Living Rooms", "Learn how to dog-proof your living spaces while maintaining a clean and beautiful environment. This guide will also provide tips for minimalism, clutter control, and photo-ready spaces."],
                    ["Lesson 4 - Bedrooms", "Set up cozy and clean sleeping areas for dogs, including protected linens, easy-to-clean surfaces, and plenty of comfortable dog beds."],
                    ["Lesson 5 - Feeding Station", "Create an organized and hygienic feeding area with secure food storage, durable bowls, and attention to special dietary needs."],
                    ["Lesson 6 - Water Stations", "Ensure access to clean and fresh water with multiple, easy-to-clean water stations that are safe and accessible."],
                    ["Lesson 7 - Outside Area", "Transform your backyard into a dog-friendly oasis with secure fencing, shaded areas, cleanup stations, and space for play and exercise."],
                    ["Lesson 8 - Flooring", "Master cleaning strategies for all surfaces in your home, using eco-friendly methods and tools to maintain a fresh and inviting space."],
                    ["Lesson 9 - Cleaning", "Understand the impact of dogs on different flooring types and how to maintain, clean, and protect your home’s surfaces."],
                ], false);

                echo renderAccordionItem("courseOutline", "day3", "Day 3: Business Planning and Launching", [
                    ["Lesson 1 - Creating your Business Plan", "Learn the core elements of a business plan, including budgeting, expenses, marketing strategies, and revenue forecasting."],
                    ["Lesson 2 - Financial plan and outlook", "Learn how to craft a detailed business plan for your home-based dog-care business, covering market analysis, financial planning, and growth strategies to position yourself for success."],
                    ["Lesson 3 - Branding", "Develop a memorable brand for your dog sitting business, including a name, logo, and unique selling points."],
                    ["Lesson 4 - Launching on Different Platforms", "Get step-by-step guidance on setting up accounts on platforms like Rover and other dog-sitting websites to increase visibility."],
                    ["Lesson 5 - Announcing on Social Media", "Learn how to create engaging social media content, target your audience, and grow your presence on key platforms."],
                    ["Lesson 6 - Emailing Local Friends and Family", "Write professional yet friendly emails to your personal network, letting them know about your new business and asking for referrals."],
                ], false);

                echo renderAccordionItem("courseOutline", "day4", "Day 4: Setting Up Your Business", [
                    ["Lesson 1 - Introduction", "Learn the essential legal, financial, and operational steps to establish a successful home-based dog-sitting business, ensuring compliance, proper tax management, and a solid foundation for long-term success."],
                    ["Lesson 2 - Business Structure and Licensing", "Learn to choose the right business structure, register your business, obtain necessary permits, and comply with local zoning and HOA regulations for a legal home-based dog-sitting business."],
                    ["Lesson 3 - Setting Up Payment Systems", "Learn how to accept client payments securely and conveniently, whether through cash, checks, mobile payment apps, or dedicated invoicing software."],
                    ["Lesson 4 - Insurance, Liability, Contracts and Policies", "Protect your business with insurance, clear client contracts, and strategic pricing to manage risks, build trust, and ensure steady income."],
                    ["Lesson 5 - Building Community Relationships", "Foster positive relationships with neighbors by setting boundaries, managing noise, and addressing concerns to ensure smooth business operations within the community."],
                    ["Lesson 6 - Setting Up an Online Presence", "Create a professional website and complete your Google Business setup to showcase services, build credibility, and attract local clients."],
                ], false);

                echo renderAccordionItem("courseOutline", "day5", "Day 5: Client Relations and Communication", [
                    ["Lesson 1 - Introduction", "Learn how to streamline client onboarding, establish professional communication, leverage social media for engagement, and build strong, loyal client relationships through personalized care and consistent, thoughtful interaction."],
                    ["Lesson 2 - New Client Onboarding", "Streamline onboarding with clear communication, key detail collection, policy discussions, and automated reminders to build trust and ensure a smooth start."],
                    ["Lesson 3 - Establishing Professional Communication", "Build trust and credibility with clear, consistent messaging, prompt responses, and a professional yet friendly tone."],
                    ["Lesson 4 - Utilizing Social Media", "Use platforms like Facebook, Instagram, and TikTok to showcase your services, share engaging content, and connect personally with potential clients."],
                    ["Lesson 5 - Building and Strengthening Client Relationships", "Foster loyalty and referrals by forming genuine connections, providing personalized care, and maintaining thoughtful communication with clients."],
                ], false);

                echo renderAccordionItem("courseOutline", "day6", "Day 6: Understanding Dog Behavior", [
                    ["Lesson 1 - Introduction", "Learn to assess temperament, manage group dynamics, use positive reinforcement, decode communication, and manage stress to create a supportive and safe environment for dogs."],
                    ["Lesson 2 - The Meet and Greet", "Learn how to assess a dog’s temperament, energy level, and compatibility with other dogs and your home environment during an initial interaction. Understand the questions to ask and behaviors to observe."],
                    ["Lesson 3 - Assessing and Welcoming Dogs", "Learn how to evaluate a dog’s temperament and energy during initial interactions, assess compatibility with other dogs, and identify appropriate engagement for varying energy levels."],
                    ["Lesson 4 - Managing Group Dynamics and Socialization", "Master techniques for safe socialization, managing group play, preventing conflicts, and selecting appropriate toys that promote healthy behaviors and cooperation."],
                    ["Lesson 5 - Behavioral Guidance and Training", "Focus on using positive reinforcement to correct undesirable behaviors, build trust, and manage separation anxiety, fostering a safe and supportive environment."],
                    ["Lesson 6 - Understanding Dog Communication and Stress", "Decode dog body language to recognize emotional states, manage stress with calming techniques, control excessive barking, and identify early signs of illness or discomfort for proper care."],
                ], false);

                echo renderAccordionItem("courseOutline", "day7", "Day 7: Emergency and Special Situations", [
                    ["Lesson 1 - Introduction", "Learn to manage dog behavior issues, handle emergencies like lost pets and medical crises, prepare for environmental challenges, and create backup plans for personal emergencies to ensure safety, communication, and business continuity."],
                    ["Lesson 2 - Handling Dog Behavior Issues", "Learn safe intervention techniques for challenging behaviors, manage accidents and health issues, and use calming strategies to address separation anxiety while ensuring safety and clear communication with owners."],
                    ["Lesson 3 - Emergency Situations with Dogs", "Develop strategies for preventing and managing emergencies, including lost pets, medical issues, and illness outbreaks, with first aid, quarantine procedures, and effective owner communication."],
                    ["Lesson 4 - Situational and Environmental Challenges", "Prepare for emergencies with an evacuation plan, emergency kit, and communication strategies, while ensuring dog safety during crises and severe weather, and establishing protocols for unreachable owners."],
                    ["Lesson 5 - Personal Emergencies and Backup Plans", "Prepare for personal emergencies by setting up backup caregivers, organizing dog care records, and maintaining a contact list and communication plan to ensure business continuity."],
                ], false);

                echo renderAccordionItem("courseOutline", "day8", "Day 8: Scaling your Business", [
                    ["Lesson 1 - Introduction", "Learn to expand your business by adding new services, creating value-added packages, offering specialized care, and introducing supplementary revenue streams to enhance client satisfaction, trust, and loyalty while boosting revenue."],
                    ["Lesson 2 - Expanding Service Offerings", "Grow your business by adding services like dog walking, grooming, training, and enrichment activities to meet diverse client needs, boost satisfaction, and create new revenue streams."],
                    ["Lesson 3 - Creating Value-Added Packages", "Boost engagement and revenue by offering subscription services, hosting events, and forming partnerships with local businesses to create joint services and referral opportunities."],
                    ["Lesson 4 - Specialized and Premium Services", "Enhance your business with specialized care for senior or special needs dogs, fitness programs, premium health coaching, and compassionate services like pet loss support to build trust and loyalty."],
                    ["Lesson 5 - Supplementary Revenue Streams", "Grow your business by offering homemade dog meals, pet products, professional photography, and pet transportation services, providing added convenience and value for clients."],
                ], false);

                echo renderAccordionItem("courseOutline", "day9", "Day 9: Financial Management", [
                    ["Lesson 1 - Introduction", "Learn to streamline finances with effective tools for tracking income, expenses, and client records, manage taxes and budgeting, plan for growth, and simplify operations with invoicing, payroll, and bookkeeping tools."],
                    ["Lesson 2 - Organizing Financial Foundations", "Streamline finances with a booking tracker, detailed income and expense spreadsheets, and organized client and pet records for efficient operations and emergency preparedness"],
                    ["Lesson 3 - Tax Considerations", "Learn how to manage taxes for a home-based business, including deductible expenses, quarterly payments, and maintaining accurate financial records to avoid surprises at tax time."],
                    ["Lesson 4 - Budgeting and Planning", "Effectively manage finances by creating a budget, building an emergency fund, planning for growth, and preparing for the future with an exit strategy and proper recordkeeping."],
                    ["Lesson 5 - Financial Operations", "Simplify financial management with invoicing, payment processing, bookkeeping tools like QuickBooks, and payroll basics to manage hiring and team expenses efficiently."],
                ], false);
                ?>
            </div>
        </div>
    </section>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
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
                        valuable information that only she had because of her experience. <span
                            class="read-more hidden"><a href="javascript:void(0)"
                                class="read-more-link text-decoration-none">More...</a><span class="read-more-content">I
                                felt taken by the hand and when we received the first dog
                                (only 5 days after starting the course) everything made so much sense, when you do it,
                                the experience that she has, becomes very evident, and you feel with the ability to
                                solve the small challenges. Today I feel very happy, I have the size of a business that
                                fits my family and that pays the rent.</span></span>
                    </p>
                    <?= $fiveStars ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
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

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
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

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
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

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
            <h2>Limited Time <span class="text-primary">Pre-Launch Bonuses</span></h2>
            <h5 class="text-secondary mb-4">Amazing Bonuses!</h5>
            <div class="row mb-4">
                <div class="col-md-8">
                    <p><b>Free Community Access</b>: your questions answered daily so you never have to second
                        guess or waste time!</p>
                    <p><b>Customized Course</b>: The course will be built around your specific needs as an early
                        adopter. This is something that late adopters will not get to experience with the finished
                        course!</p>
                    <p><b>Early Access to Coaching Program</b>: All of our early adopters will have first
                        dibs on our limited spaces within our 1:1 coaching programs.</p>
                </div>
                <div class="col-lg-4 d-flex align-items-center justify-content-center" style="background-color:gray;">
                    <span>Animated GIF of Lesson Video</span>
                </div>
            </div>
            <?= $enrollButton ?>
        </div>
    </section>

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
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

    <section class="container-fluid <?= alternatingBgClass() ?>">
        <div class="<?= $pageContainerClasses ?>">
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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".read-more").forEach(function (readMoreElem) {
                readMoreElem.querySelector(".read-more-link").addEventListener("click", function (event) {
                    readMoreElem.classList.remove("hidden");
                });
            });
        });
    </script>
</body>

</html>
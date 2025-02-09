<?php
session_start();
require_once("redirect.php");
$_GLOBALS["pageTitle"] = "At-home Dog Boarding Course";
?>
<!doctype html>
<html lang="en">

<head>
    <?php include "includes/head-tag-contents.php"; ?>
    <link rel="stylesheet" type="text/css" href="/styles/course.css?v=<?= time() ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>

    <?php include "includes/debug.php"; ?>

    <div class="container-fluid" style="background: linear-gradient(180deg, #FFFBF9 16.31%, #FFE6D2 89.83%);">
        <header class="container pt-3 pt-md-4">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="/">
                        <img alt="Hound Away From Home" src="/images/course/headerlogo.png" />
                    </a>
                </div>
                <div>
                    <img src="/images/course/paws.png" style="width: 110px;margin-bottom: -100px;margin-left: -52px;" />
                </div>
                <a href="/ebook.php" class="btn btn-outline-secondary p-3 px-4 rounded-pill text-nowrap">
                    Download Free E-book
                </a>
            </div>
        </header>

        <section class="p-3 p-md-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div>
                            <h1 class="text-center text-lg-start">
                                Turn your love for dogs into a <span class="text-success">profitable</span>, flexible
                                career!
                            </h1>
                            <div class="row pt-xl-4">
                                <div class="col-xl-4 text-center d-flex align-items-center justify-content-center">
                                    <a href="/enroll.php"
                                        class="btn btn-lg btn-secondary text-nowrap px-4 my-3 rounded-pill shadow">
                                        Enroll Now
                                    </a>
                                </div>
                                <div class="col-xl-8">
                                    <p class="fs-5 text-center text-lg-start">Ready to turn your love for dogs into a
                                        thriving business? Our online course will tell you everything you need to know
                                        to run your own at-home dog boarding business!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <iframe class="youtube-video" src="https://www.youtube.com/embed/mK9lg1l1KkU?enablejsapi=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-3 py-lg-1 pt-xl-3"
        style="background: linear-gradient(180deg, rgba(255,230,210,1) 0%, rgba(255,230,210,1) 47%, rgba(255,255,255,1) 48%);">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-xl-3">
                    <div class="text-end">
                        <img class="d-none d-lg-inline-block" src="/images/course/vectorright.png" alt="Arrow" />
                    </div>
                    <div class="text-center">
                        <img class="d-none d-lg-inline-block" src="/images/course/frenchbulldog.png"
                            alt="French Bulldog" />
                    </div>
                </div>
                <div class="col-lg-7 col-xl-7 px-5">
                    <div class="shadow-lg rounded-4 p-3 p-xl-4 px-xl-5 bg-secondary text-white"
                        style="background-image: url(/images/course/prelaunch-box.png);background-position: top right;background-repeat: no-repeat;background-size: cover;">
                        <h2>Pre-launch Sale!</h2>
                        <p class="fs-5 fw-light">Includes</p>
                        <p class="fs-4">75% Off<span class="fw-light"> Lifetime Access</span></p>
                        <p class="fs-4">Early Access<span class="fw-light"> to the Course</span></p>
                        <p class="fs-4">Free DogBoarders<span class="fw-light"> Community Access</span></p>
                        <p class="fs-4 mb-0">Daily Answers<span class="fw-light"> to Your Questions</span></h4>
                    </div>
                </div>
                <div class="col-lg-2 col-xl-2 d-flex align-items-center justify-content-center">
                    <a href="/enroll.php" class="btn btn-lg btn-primary text-nowrap px-4 my-3 rounded-pill shadow">
                        Grab Your Discount!
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php
    function renderInfobox($image, $text): string
    {
        return <<<HTML
        <div class="col-lg-4 p-2 d-flex">
            <div class="flex-grow-1 w-100 h-100 rounded-5 infobox text-center p-4">
                <img class="m-2" src="/images/course/box_$image.png" alt="$text" />
                <h3 class="">$text</h3>
            </div>
        </div>
        HTML;
    }
    ?>
    <section class="container my-3 py-3 py-lg-1 pt-xl-3">
        <div class="row">
            <div class="col-lg-4 p-2 d-flex justify-content-center align-items-center">
                <div>
                    <h2 class="text-danger">
                        Why Choose Dog Boarding?
                    </h2>
                    <p class="">
                        Dog boarding offers a flexible, fulfilling opportunity to earn income while providing care and
                        companionship to adorable dogs.
                    </p>
                </div>
            </div>
            <?= renderInfobox("twentyfourhours", "Escape the 9-to-5 grind and enjoy flexibility.") ?>
            <?= renderInfobox("boss", "Be your own boss while caring for adorable pups.") ?>
        </div>
        <div class="row">
            <?= renderInfobox("parents", "Ideal for parents or aspiring entrepreneurs.") ?>
            <?= renderInfobox("reward", "Earn with a rewarding business.") ?>
            <?= renderInfobox("caring", "Find fulfillment caring for dogs.") ?>
        </div>
        <div class="my-3 text-center">
            <img class="" src="/images/course/vectorright.png" alt="Arrow">
            <a href="/enroll.php" class="btn btn-lg btn-secondary text-nowrap px-4 my-3 rounded-pill shadow">
                Unlock Your Course
            </a>
        </div>
    </section>

    <section class="py-3 py-lg-1 pt-xl-3">
        <div class="container rounded-5 bg-light p-3 p-md-4 p-xl-5">
            <h1 class="mb-5 text-center">What you'll learn in this course</h1>
            <div class="row mb-5">
                <div class="col-lg-5 text-center">
                    <img class="rounded-5 img-fluid" src="/images/course/learn_success.png">
                </div>
                <div class="col-lg-7">
                    <h2 class="text-danger my-4">Setting Up for Success</h2>
                    <ul class="checkmark-list">
                        <li class="fs-5 fw-light">Learn how to evaluate your space, <strong>resources,</strong> and
                            <strong>legal steps</strong> for starting a dog boarding business.
                        </li>
                        <li class="fs-5 fw-light">Create a safe, welcoming environment for dogs while maintaining your
                            home's comfort.</li>
                        <li class="fs-5 fw-light">Access worksheets, sample spreadsheets, and contracts to help plan and
                            organize your
                            business.</li>
                    </ul>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-5 order-1 order-lg-2 text-center">
                    <img class="rounded-5 img-fluid" src="/images/course/learn_business.png">
                </div>
                <div class="col-lg-7 order-2 order-lg-1">
                    <h2 class="text-danger my-4">Running and Growing Your Business</h2>
                    <ul class="checkmark-list">
                        <li class="fs-5 fw-light">Develop a business plan, branding strategies, and methods for
                            attracting clients.</li>
                        <li class="fs-5 fw-light">Master client relations and ensure a peaceful environment for dogs in
                            your care.</li>
                        <li class="fs-5 fw-light">Utilize customizable flyers, contracts, and tools to streamline
                            business operations and
                            scaling.</li>
                    </ul>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-lg-5 text-center">
                    <img class="rounded-5 img-fluid" src="/images/course/learn_situations.png">
                </div>
                <div class="col-lg-7">
                    <h2 class="text-danger my-4">Handling Challenges and Special Situations</h2>
                    <ul class="checkmark-list">
                        <li class="fs-5 fw-light">Gain insights into dog behavior and how to manage emergencies and
                            special care situations.
                        </li>
                        <li class="fs-5 fw-light">Learn techniques to maintain safety and wellbeing for dogs in your<br>
                            care.</li>
                        <li class="fs-5 fw-light">Access practical templates and protocols to handle special situations
                            with confidence.</li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <a href="/enroll.php" class="btn btn-lg btn-secondary text-nowrap px-4 my-3 rounded-pill shadow">
                    Enroll & Learn Today
                </a>
                <img class="" src="/images/course/vectorleft.png" alt="Arrow">
            </div>
        </div>
    </section>

    <section class="py-4 pt-xl-5">
        <div class="container">
            <h1 class="text-center">Course Outline</h1>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <p class="text-center">Our comprehensive course covers everything you need to know to start and run
                        a successful at- home dog boarding business. Here's a sneak peek at what you'll learn:</p>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="text-center">
                <button type="button" id="courseOutlineToggle" accordion-id="#courseOutline"
                    class="btn btn-primary text-nowrap px-4 my-3 rounded-pill expand"></button>
            </div>
            <div id="courseOutline">
                <?php
                function renderAccordionItem($accordion, $id, $title, $contents, $show): string
                {
                    $contentsHtml = "";
                    foreach ($contents as $items) {
                        $contentsHtml .= <<<HTML
                        <h3 class="fs-5 m-0">$items[0]</h3>
                        <p class="fw-normal">$items[1]</p>
                        HTML;
                    }
                    $showClass = $show ? "show" : "";
                    $ariaExpanded = $show ? "true" : "false";
                    $html = <<<HTML
                    <div class="card">
                        <div class="card-header p-3 bg-white" role="tab" id="$id">
                            <button class="accordion-button collapsed" role="button" data-bs-toggle="collapse"
                                data-parent="#$accordion" href="#$id-button" aria-expanded="$ariaExpanded"
                                aria-controls="$id-button">
                                <h2 class="fs-5 m-0">$title</h2>
                            </button>
                        </div>
                        <div class="card-body collapse $showClass p-0" id="$id-button" role="tabpanel" aria-labelledby="$id">
                            <div class="accordion-body p-3">
                                $contentsHtml
                            </div>
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
                    ["Lesson 3 - Branding", "Learn how to create a compelling brand for your dog boarding business that reflects your core values, attracts ideal clients, and sets the tone for an unforgettable experience for dogs and their owners."],
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
                    ["Lesson 2 - New Client Interest", "Streamline new client interest with clear communication, policy discussions, and automated reminders to build trust and ensure a smooth start."],
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
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    document.querySelector("#courseOutlineToggle").addEventListener("click", function (event) {
                        var accordionId = event.target.getAttribute("accordion-id");
                        var accordionElem = document.querySelector(accordionId);
                        accordionElem.querySelectorAll(".collapse").forEach(function (collapseElem) {
                            var accordionButton = collapseElem.parentElement.querySelector(".accordion-button");
                            if (event.target.classList.contains("active")) {
                                collapseElem.classList.remove("show");
                                accordionButton.classList.add("collapsed");
                                accordionButton.setAttribute("aria-expanded", "false");
                            } else {
                                collapseElem.classList.add("show");
                                accordionButton.classList.remove("collapsed");
                                accordionButton.setAttribute("aria-expanded", "true");
                            }
                        });
                        event.target.classList.toggle("active");
                        document.querySelector("#courseOutlineToggle").scrollIntoView({
                            behavior: "smooth"
                        });
                    });
                });
            </script>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="container">
            <h2 class="testimonial-heading text-center">Testimonials</h2>
            <p class="testimonial-desc text-center">Our comprehensive course covers everything you need to know to start
                and
                run a
                successful at-home dog boarding business. Here's a sneak peek at what you'll learn:</p>

            <!-- Carousel wrapper -->
            <div id="carouselExampleControls" data-mdb-carousel-init class="carousel slide text-center carousel-dark"
                data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slide-inner">
                                    <ul class="list-unstyled d-flex justify-content-right text-warning mb-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                    </ul>

                                    <p class="text-muted">
                                        Selena knows her stuff! With over a decade of experience in the business and a
                                        lifetime of loving
                                        dogs, she offers the tools you'll need to start a successful dog business. I’ve
                                        been working with
                                        her for over a year since before I got my first guest, to now where I have
                                        dozens of repeat clients.
                                        I'm grateful for her mentorship and highly recommend her course!
                                    </p>

                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-2">
                                            <img class="rounded-circle shadow-1-strong mb-4 testimonial-image"
                                                src="/images/course/leila.png" alt="avatar" style="width: 50px;" />
                                        </div>
                                        <div class="col-md-10 ">
                                            <div class="content-left">
                                                <h5 class="mb-3">Maria Kate</h5>
                                                <p>Photographer</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="slide-inner">
                                    <ul class="list-unstyled d-flex justify-content-right text-warning mb-0">
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                        <li><i class="fas fa-star fa-sm"></i></li>
                                    </ul>

                                    <p class="text-muted">
                                        Honestly, I thought that doing the dog business would not require much
                                        knowledge, it could be
                                        intuitive, but when I started receiving information from Selena, I realized that
                                        I needed valuable
                                        information that only she had because of her experience. I felt taken by the
                                        hand and when we
                                        received the first dog (only 5 days after starting the course) everything made
                                        so much sense, when
                                        you do it... <a href="#">Read More</a>
                                    </p>

                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-2">
                                            <img class="rounded-circle shadow-1-strong mb-4 testimonial-image"
                                                src="/images/course/sara.png" alt="avatar" style="width: 50px;" />
                                        </div>
                                        <div class="col-md-10 ">
                                            <div class="content-left">
                                                <h5 class="mb-3">Sara Botero</h5>
                                                <p>UX Designer</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- <button data-mdb-button-init class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls"
                              data-mdb-slide="prev">
                              <span class="carousel-control-prev-icon text-body" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button data-mdb-button-init class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls"
                              data-mdb-slide="next">
                              <span class="carousel-control-next-icon text-body" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button> -->
            </div>
            <!-- Carousel wrapper -->

            <div class="course-btn btns btn-hightlight text-center"> <button type="button" class="btn">Enroll & Learn
                    Today</button></div>

        </div>
    </section>


    <section class="meet-your-coach-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="meet-coach-heading">Meet your coach</h2>
                    <p class="meet-coach-desc">Hi, I’m Selena Trotter, and I’ve been running a successful at-home dog
                        boarding
                        business since 2012. It all started one summer during a break from my high school teaching
                        career when I
                        began looking after dogs. What began as a side hustle quickly became a fulfilling, full-time
                        business that
                        allowed me to stay home -all while earning a great income. Since then, I’ve cared for over 1,000
                        dogs,
                        creating a safe, loving, and happy environment. </p>
                </div>
                <div class="col-md-6">
                    <img class="meet-img" src="/images/course/meet-coach.png">
                </div>
            </div>

        </div>

    </section>

    <section class="meet-des-sec">
        <div class="container">
            <div class="meet-content">
                <p class="first-con">Running this business has given me the freedom to raise my kids at home and involve
                    them in
                    the work, teaching them responsibility and the value of caring for others.</p>
                <p>Over the years, I’ve learned the ins and outs of managing a successful dog boarding business, from
                    handling
                    unique challenges to enjoying the incredible rewards.</p>
                <p>With my background in teaching and executive coaching, I bring a wealth of experience in guiding
                    others to
                    success. My practical, supportive approach is designed to help you achieve financial independence,
                    time
                    flexibility, and a deep sense of fulfillment. Whether you’re looking to supplement your income or
                    create a
                    full-time career, I’m here to share everything to help you get started, avoid pitfalls, and find joy
                    in
                    building a business centered around the love of dogs.</p>
            </div>
        </div>
    </section>

    <section class="who-course-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="who-course-heading">Who is this course for</h2>
                    <ul class="left">
                        <li>Perfect for dog lovers wanting to earn money from home.</li>
                        <li>Suitable for stay-at-home parents, remote workers, or retirees.</li>
                        <li>Learn to turn your passion for dogs into a business.</li>
                        <li>Tips for creating a safe, dog-friendly home.</li>
                        <li>Strategies for attracting clients and managing dogs.</li>
                        <li>Solutions for handling dog fights and cleaning efficiently.</li>
                        <li>Make dog care enjoyable, stress-free, and profitable.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h2 class="who-course-heading">Who is this course not for</h2>
                    <ul class="right">
                        <li>This course requires prior dog care experience.</li>
                        <li>Dog behavior and needs are essential but not detailed here.</li>
                        <li>Success requires strong commitment to being present with the dogs.</li>
                        <li>A support system is needed for managing the business during absences.</li>
                        <li>Comfort with cleaning and handling behavioral challenges is necessary.</li>
                        <li>Setting up a space and leaving dogs alone won’t work.</li>
                        <li>This course will help you succeed in dog care’s joys and challenges.</li>
                    </ul>
                </div>

            </div>
    </section>

    <section class="limited-time-section">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Limited Time Pre-Launch Bonuses</h3>
                <p class="text-center">Ready to turn your love for dogs into a thriving business? Our online course will
                    tell
                    you<br>
                    everything you need to know to run your own at-home dog boarding business!</p>
                <div class="course-btn btns text-center"> <button type="button" class="btn">Enroll Now</button></div>
            </div>
        </div>
    </section>

    <section class="frequently-asked-section">
        <div class="container">
            <div class="row">
                <h2 class="frequently-asked-heading text-center">Frequently asked questions</h2>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Who is this course designed for?</h3>
                        <p>This course is for people who want to stay home more and love dogs. Whether you're a
                            stay-at-home parent,
                            remote worker, retiree, or simply looking for a fulfilling way to earn income, this course
                            is for you.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Who is this course designed for?</h3>
                        <p>This course is for people who want to stay home more and love dogs. Whether you're a
                            stay-at-home parent,
                            remote worker, retiree, or simply looking for a fulfilling way to earn income, this course
                            is for you.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Do I need to own my home to start a dog boarding business?</h3>
                        <p>No, but you’ll need permission from your landlord if you’re renting. If owning isn’t an
                            option, you can
                            still explore related opportunities like dog walking or in-home dog sitting for others.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>How much time do I need to dedicate to running this type of business?</h3>
                        <p>A few hours a day are needed to play with, clean up after, and feed the dogs. Simply being
                            present with
                            them is essential but doesn’t require extra effort.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>What upfront costs should I expect to get started?</h3>
                        <p>If you already own a dog, your upfront costs will likely be minimal—maybe a few additional
                            gates, bowls,
                            beds, or cleaning supplies.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Will this course teach me how to handle dog behavior issues?</h3>
                        <p>The course will help you assess whether a dog is a good fit to avoid behavior issues. It also
                            teaches how
                            to set up your home to minimize potential problems, but it doesn’t cover correcting existing
                            behavioral
                            issues.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Can I run this business if I have a full-time remote job?</h3>
                        <p>Yes, as long as you’re home and able to supervise and care for the dogs, this business is a
                            great fit for
                            remote workers.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>How quickly can I start making money after completing the course?</h3>
                        <p>You can start getting clients even before finishing the course. The early sections focus on
                            setting up
                            your home and attracting clients, so you can begin earning quickly.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>What if I live in a rural area—can I still succeed?</h3>
                        <p>Yes! While attracting daycare clients might be more challenging, many people are willing to
                            travel for
                            the unique experience of having their dogs cared for in a spacious, natural setting.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Will this course help me get clients?</h3>
                        <p>Absolutely. The course includes strategies and templates to help you effectively advertise
                            and attract
                            clients.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>What tools or resources are included in the course?</h3>
                        <p>You’ll get business plan templates, income and expense tracking sheets, advertising
                            templates, and more
                            resources as the course grows.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Do I need any certifications or licenses to start a dog boarding business?</h3>
                        <p>Depending on your location, you may need a business permit. Be sure to check your local
                            requirements.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>What happens if I need to take a break or go on vacation?</h3>
                        <p>You can pause your business at any time or find someone to cover for you while you’re away.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>How is this course delivered?</h3>
                        <p>The course is delivered through pre-recorded video lessons, so you can learn at your own
                            pace.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>What kind of support will I have during and after the course?</h3>
                        <p>You’ll have access to a supportive community where you can ask questions and connect with me
                            directly.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="freq-ques">
                        <h3>Is there a money-back guarantee if I’m not satisfied?</h3>
                        <p>Yes, we offer a money-back guarantee if you’re not happy with the course.</p>
                    </div>
                </div>
            </div>
            <div class="course-btn btns text-center"> <button type="button" class="btn">Unlock Your Course</button>
            </div>
        </div>
    </section>

    <section class="disclaimer">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Disclaimer</h2>
            </div>
            <div class="col-md-12">
                <div class="disclaimer-details">
                    <h4>Legal and Financial Disclaimer</h4>
                    <p>This course does not guarantee financial success or specific income levels. While the course
                        provides
                        strategies to help you attract clients, the amount of money you earn will depend on various
                        factors,
                        including your location, your home setup, and your prior experience. Results may vary based on
                        individual
                        effort and circumstances. Starting a dog boarding business involves inherent risks, as dogs are
                        animals and
                        cannot be fully controlled. The course will set you up for success, but it is your
                        responsibility to avoid
                        situations that could put you or the dogs in your care at risk.</p>
                </div>
                <div class="disclaimer-details">
                    <h4>Licensing and Legal Requirements</h4>
                    <p>Participants are solely responsible for ensuring they comply with all local laws, permits, and
                        regulations
                        required to operate a dog boarding business in their area. While the course provides general
                        guidance on
                        city and county permitting, as well as information on filing taxes and setting up your business,
                        it does not
                        constitute legal advice. It is up to you to ensure all necessary legal and regulatory
                        requirements are met.
                    </p>
                </div>
                <div class="disclaimer-details">
                    <h4>Health and Safety Disclaimer</h4>
                    <p>You are fully responsible for ensuring the safety of your home and the dogs in your care. While
                        the course
                        offers guidance on assessing dog behavior and creating a safe environment, the final decisions
                        and
                        responsibilities lie with you.</p>
                </div>
                <div class="disclaimer-details">
                    <h4>Intellectual Property</h4>
                    <p>All course content, including templates, resources, and videos, is for personal use only.
                        Redistribution,
                        resale, or unauthorized sharing of the materials is strictly prohibited.</p>
                </div>
                <div class="disclaimer-details">
                    <h4>Course Limitations</h4>
                    <p>This course covers the basics of starting and running a dog boarding business but does not
                        include advanced
                        training in dog behavior, medical care, or other specialized areas. If you wish to pursue
                        further
                        certifications, additional training may be required. All advice provided is based on personal
                        experience and
                        does not constitute professional certification in animal behavior or care.</p>
                </div>
                <div class="disclaimer-details">
                    <h4>Refund Policy</h4>
                    <p>We stand behind the value of this course. However, if you are unable to secure clients or
                        determine that
                        this business is not the right fit for you, we offer a money-back guarantee. Specific details of
                        the refund
                        policy will be outlined at the time of purchase.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include "includes/bootstrapjs.php"; ?>

</body>

</html>
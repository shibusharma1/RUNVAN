<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RUNVAN</title>
    <meta name="description"
        content="Experience luxury beauty treatments, hair styling, skin care, spa therapies and bridal services at RUNVAN.">
    <meta name="keywords"
        content="Beauty Salon, Spa, Hair Styling, Bridal Makeup, Skin Care">
    <meta name="author"
        content="RUNVAN">
    <link rel="icon"
        href="./assets/images/logo.avif">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <!-- AOS -->
    <link rel="stylesheet"
        href="https://unpkg.com/aos@2.3.4/dist/aos.css">
    <!-- Remix Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <link rel="stylesheet" href="./assets/css/app.css">
    
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .heading-font {
            font-family: "Poppins", sans-serif;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container nav-container">
            <!-- Logo -->
            <a href="./" class="logo">
                <img src="assets/images/logo.avif" alt="RUNVAN">
                <div class="logo-text">
                    <span class="logo-title">RUNVAN</span>
                    <span class="logo-subtitle">Returned United Nations Volunteers Association, Nepal</span>
                </div>
            </a>
            <!-- Desktop Menu -->
            <ul class="nav-menu">
                <li><a href="./" class="nav-link active">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        About
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./about.php">
                                About RUNVAN
                            </a>
                        </li>
                        <li>
                            <a href="./executive-teams.php">
                                Executive Board
                            </a>
                            <a href="./general-teams.php">
                                General Members
                            </a>
                        </li>
                        <!-- <li>
                            <a href="./biography.php">
                                Biographies
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a href="./programs.php" class="nav-link">
                        Programs
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        Media and Information
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./publications.php">
                                Publications
                            </a>
                        </li>
                        <li>
                            <a href="./gallery.php">
                                Gallery
                            </a>
                        </li>
                        <!-- <li>
                            <a href="./testimonials.php">
                                Testimonials
                            </a>
                        </li> -->
                        <li>
                            <a href="./partners.php">
                                Partners/Affiliations
                            </a>
                        </li>
                        <li>
                            <a href="./certifications.php">
                                Certifications
                            </a>
                        </li>
                        <li>
                            <a href="./notice-reports.php">
                                Announcements/Latest News
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle">
                        Join us
                        <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="./membership.php">
                                Membership
                            </a>
                        </li>
                        <li>
                            <a href="./vacancies.php">
                                Vacancies
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- <li><a href="#" class="nav-link">Contact</a></li> -->
            </ul>
            <!-- CTA -->
            <div class="nav-actions">
                <a href="./donations.php" class="btn-primary">
                    Donate Us
                </a>
                <a href="./contact.php" class="btn-primary">
                    Contact Us
                </a>
            </div>
            <!-- Mobile Toggle -->
            <button class="mobile-toggle" id="mobileToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div class="mobile-menu text-center" id="mobileMenu">
            <a href="./" class="mobile-link">Home</a>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn">
                    About
                    <i class="ri-arrow-down-s-line"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="./about.php" class="mobile-link">About RUNVAN</a>
                    <a href="./executive-teams.php" class="mobile-link">Executive Board</a>
                    <a href="./general-teams.php" class="mobile-link">General Members</a>
                    <!-- <a href="./biography.php" class="mobile-link">Biographies</a> -->
                </div>
            </div>
            <a href="./programs.php" class="mobile-link">
                Programs
            </a>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn">
                    Media and Information
                    <i class="ri-arrow-down-s-line"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="./publications.php" class="mobile-link">Publications</a>
                    <a href="./gallery.php" class="mobile-link">Gallery</a>
                    <!-- <a href="./testimonials.php" class="mobile-link">Testimonials</a> -->
                    <a href="./partners.php" class="mobile-link">Partners/Affiliations</a>
                    <a href="./certifications.php" class="mobile-link">Certifications</a>
                    <a href="./notice-reports.php" class="mobile-link">Announcements/Latest News</a>
                </div>
            </div>
            <div class="mobile-dropdown">
                <button class="mobile-dropdown-btn">
                    Join Us
                    <i class="ri-arrow-down-s-line"></i>
                </button>
                <div class="mobile-dropdown-content">
                    <a href="./membership.php" class="mobile-link">Membership</a>
                    <a href="./vacancies.php" class="mobile-link">Vacancies</a>
                </div>
            </div>
            <a href="./donations.php" class="btn-primary mobile-btn">
                Donate Us
            </a>
            <a href="./contact.php" class="btn-primary mobile-btn">
                Contact Us
            </a>
        </div>
    </nav>
    <main class="relative">
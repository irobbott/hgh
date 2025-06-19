<?php session_start(); ?>
<?php require_once 'send.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Primary Meta Tags -->
    <title>Contact &mdash; Mobile Phlebotomy in Phoenix | Hope Grace Happiness Mobile Labs</title>
    <meta name="title" content="Contact &mdash; Mobile Phlebotomy in Phoenix | Hope Grace Happiness Labs">
    <meta name="description" content="Compassionate, professional mobile phlebotomy services in Phoenix. We come to you for routine blood draws, lab pickups, drug testing & more. Book your home visit now.">
    <meta name="keywords" content="mobile phlebotomy Phoenix, blood draw at home, in-home lab testing, phlebotomist Phoenix, Jamie Glaspie, lab pickup service, pediatric phlebotomy, geriatric phlebotomy, drug testing, HIPAA compliant phlebotomy">
    <meta name="author" content="Jamie Glaspie">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.hghmobilelabs.com/">
    <meta property="og:title" content="Contact &mdash; Mobile Phlebotomy in Phoenix | Hope Grace Happiness Labs">
    <meta property="og:description" content="Skip the clinic. Get professional blood draws at home with a certified phlebotomist. Serving Phoenix and surrounding areas.">
    <meta property="og:image" content="https://irobbott.github.io/hgh/assets/images/og-image.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://www.hghmobilelabs.com/">
    <meta name="twitter:title" content="Contact &mdash; Mobile Phlebotomy in Phoenix | Hope Grace Happiness Labs">
    <meta name="twitter:description" content="Compassionate, mobile blood draw services brought to your doorstep in Phoenix. Book a home visit today.">
    <meta name="twitter:image" content="https://irobbott.github.io/hgh/assets/images/og-image-2.jpg">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/14243d0b86.js" crossorigin="anonymous"></script>
    <!-- AOS -->
    <link href="./assets/vendors/aos/aos.css" rel="stylesheet">
    <!-- Swiper -->
    <link rel="stylesheet" href="./assets/vendors/swiper/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsiveness.css">

    <style>
        .swiper-wrapper {
            width: 300px;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 100%;
            height: 300px;
        }
    </style>
</head>
<body>
    <!-- Top strip -->
    <div class="top-strip">
        <div class="top-strip-left">
            <div class="social-icon">
                <a href="https://www.facebook.com/profile.php?id=61577637539106" class="text-white" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
            </div>
            <div class="social-icon">
                <a href="https://www.instagram.com/hope.gracehappiness/" class="text-white" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="top-strip-right">
            <div class="top-strip-right-info">
                <a href="mailto:info@hghmobilelabs.com" class="text-white">
                    <i class="fa-solid fa-envelope"></i>
                    info@hghmobilelabs.com
                </a>
            </div>
            <div class="top-strip-right-info text-white">
                <i class="fa-solid fa-location-dot"></i>
                All Around Phoenix & Beyond
            </div>
        </div>
    </div>
    <!-- // Top strip -->
    
    <header class="pages-header">
        <!-- Navbar -->
        <nav>
            <div class="brand">
                <a href="./">
                    <img src="./assets/images/logo-white.png" alt="Hope Grace Happiness Logo" class="img-fluid">
                </a>
            </div>
            <div class="main-menu">
                <li><a href="./" class="">HOME</a></li>
                <li><a href="./about" class="">ABOUT</a></li>
                <li><a href="./services" class="">SERVICES</a></li>
                <li><a href="./booking" class="">BOOKING</a></li>
            </div>
            <div class="right-btn">
                <li class="right-btn-contact">
                    <a href="./contact" class="btn btn-main" id="scrollBtn">CONTACT</a>
                </li>
                <div class="mobile-nav-btn">
                    <button id="menuToggle">
                        <img src="./assets/images/menu-icon.png" class="img-fluid" alt="Menu Icon">
                    </button>
                </div>
            </div>
        </nav>
        <!-- // Navbar -->

        <!-- Hero carousel -->
        <div class="pages-header-hero">
            <div class="pages-headline text-center">
                Contact
            </div>
            <div class="page-link text-center">
                <div><a href="./">HOME</a></div>
                <div><i class="fa-solid fa-angle-right"></i></div>
                <div>CONTACT</div>
            </div>
        </div>
        <!-- // Hero carousel -->
    </header>

    <section id="contact-page">
        <div class="section-inner">
            <div class="contact row">
                <div class="col-md-5 mb-4">
                    <h5 class="text-main">CONTACT</h5>
                    <h2 class="vortigra mb-4" data-aos="zoom-in"><i class="fa-solid fa-headset"></i> Contact Jamie Glaspie</h3>
                    <p class="mb-4 lead">
                        You can reach out to us through calls or emails, or you can send us a message directly
                    </p>
                    <div class="ctn-socials">
                        <li class="my-2"><a href="tel:+15551234567" class="text-dark"><i class="fa-solid fa-phone"></i> (555) 123-4567</a></li>
                        <li class="my-2"><a href="mailto:info@hghmobilelabs.com" class="text-dark"><i class="fa-solid fa-envelope"></i> info@hghmobilelabs.com</a></li>
                        <li class="my-2" class="text-dark"><i class="fa-solid fa-location-dot"></i> Phoenix & surrounding areas</li>
                    </div>
                    <div class="ctn-hours mt-4">
                        <span class="fw-bold"><i class="fa-solid fa-clock-rotate-left"></i> Hours: <br></span>
                        Monday - Friday: 7 AM - 6 PM <br>
                        Saturday: 8 AM - 12 PM
                    </div>
                </div>
                <!-- Service cards -->
                <div class="col-md-7 mt-4">
                    <div class="ctn-form">
                        <!-- <form action="" method="post">
                            <div class="from-group mb-4">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <input type="text" name="name" id="" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" id="" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Your message..."></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-main"><i class="fa-solid fa-paper-plane"></i> Send Message</button>
                            </div>
                        </form> -->
                        <form action="" method="post">
                            <?php if (isset($_SESSION['form_status'])): ?>
                                <?php list($type, $msg) = $_SESSION['form_status']; ?>
                                <div class="alert alert-<?php echo $type === 'success' ? 'success' : 'danger'; ?>">
                                    <?php echo htmlspecialchars($msg); ?>
                                </div>
                                <?php unset($_SESSION['form_status']); ?>
                            <?php endif; ?>
                            <input type="hidden" name="form_token" value="<?php echo md5('secure123'); ?>">
                            <div style="display:none">
                                <input type="text" name="website" value="">
                            </div>

                            <div class="from-group mb-4">
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <textarea name="message" cols="30" rows="10" class="form-control" placeholder="Your message..." required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-main">
                                    <i class="fa-solid fa-paper-plane"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Footer -->
    <footer>
        <div class="section-inner row">
            <div class="col-md-5">
                <div class="footer-img">
                    <img src="./assets/images/logo-white.png" alt="" class="img-fluid">
                </div>
                <div class="footer-about lead text-white my-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, necessitatibus.
                </div>
                <div class="footer-socials">
                    <a href="tel:+15551234567">
                        <li><i class="fa-solid fa-phone"></i></li>
                    </a>
                    <a href="mailto:info@hghmobilelabs.com">
                        <li><i class="fa-solid fa-envelope"></i></li>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61577637539106" target="_blank">
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                    </a>
                    <a href="https://www.instagram.com/hope.gracehappiness/" target="_blank">
                        <li><i class="fa-brands fa-instagram"></i></li>
                    </a>
                </div>
            </div>
            <div class="col-md-3 my-4">
                <h3 class="text-white">Quick Links</h3>
                <ul class="footer-links">
                    <li>
                        <a href="" class="text-white">
                            <i class="fa-solid fa-angle-right"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="" class="text-white">
                        <i class="fa-solid fa-angle-right"></i> About
                    </a>
                    </li>
                    <li>
                        <a href="" class="text-white">
                        <i class="fa-solid fa-angle-right"></i> Services
                    </a>
                    </li>
                    <li>
                        <a href="" class="text-white">
                        <i class="fa-solid fa-angle-right"></i> Booking
                    </a>
                    </li>
                    <li>
                        <a href="" class="text-white">
                        <i class="fa-solid fa-angle-right"></i> Contact
                    </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h3 class="text-white">
                    <i class="fa-solid fa-calendar-days mb-1"></i> Book Your Appointment Today
                </h3>
                <div class="lead text-white my-4">
                    Let's make lab work easier. I'll come to your home, office, or facility.
                </div>
                <div class="">
                    <a href="./booking" class="btn btn-white">Schedule a Visit <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="made-by-irobbott text-white">
                Made with <i class="fa-solid fa-heart"></i> by 
                <a class="irobbott r-tooltip text-warning" href="https://iconicrobbott.com" target="_blank">
                    iRobbott
                    <span class="r-tooltiptext">www.iconicrobbott.com - AI, code, and tech!</span>
                </a>
            </div>
            <div class="copyright text-white">
                Copyright &copy; 2025. All rights reserved
            </div>
        </div>
    </footer>
    <!-- // Footer -->


    
    <!-- Mobile menu -->
    <div class="mobile-nav-menu">
        <div class="mobile-nav-menu-inner">
            <a href="">
                <div class="mobile-menu-item">
                    <i class="fa-solid fa-house mb-1"></i>
                    <span class="ctn">HOME</span>
                </div>
            </a>
            <a href="">
                <div class="mobile-menu-item">
                    <i class="fa-solid fa-circle-info mb-1"></i>
                    <span class="ctn">ABOUT</span>
                </div>
            </a>
            <a href="">
                <div class="mobile-menu-item">
                    <i class="fa-solid fa-briefcase-medical mb-1"></i>
                    <span class="ctn">SERVICES</span>
                </div>
            </a>
            <a href="">
                <div class="mobile-menu-item">
                    <i class="fa-solid fa-calendar-days mb-1"></i>
                    <span class="ctn">BOOKING</span>
                </div>
            </a>
            <a href="">
                <div class="mobile-menu-item">
                    <i class="fa-solid fa-id-badge mb-1"></i>
                    <span class="ctn">CONTACT</span>
                </div>
            </a>
        </div>
    </div>
    <!-- // Mobile menu -->
    

    <!-- Bootstrap -->
    <script src="./assets/vendors/bootstrap/bootstrap.min.js"></script>
    <!-- Lazysizes -->
    <script src="./assets/vendors/lazysizes/lazysizes.min.js" async=""></script>
    <!-- AOS -->
    <script src="./assets/vendors/aos/aos.js"></script>
    <!-- Swiper -->
    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js" defer></script>
    <script>
        // AOS
        AOS.init();

        // Swiper
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
</body>
</html>
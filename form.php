<?php
// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email configuration
    $to = "your-email@example.com"; // Replace with your email address
    $email_subject = "New Contact Form Submission: $subject";
    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $success_message = "Your message has been sent successfully!";
    } else {
        $error_message = "There was an error sending your message. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GALAXY ENTERPRISES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header -->
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col">
                    <p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+91 85901 72642</a></p>
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">GALAXY <span>ENTERPRISES</span></a>
            <form action="#" class="searchform order-sm-start order-lg-last">
                <div class="form-group d-flex">
                    <input type="text" class="form-control pl-3" placeholder="Search">
                    <button type="submit" class="form-control search"><span class="fa fa-search"></span></button>
                </div>
            </form>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="success-stories.html" class="nav-link">Job</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END Header -->

    <!-- Main Content -->
    <div class="hero-wrap">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text align-items-center justify-content-center">
                        <div class="col-md-10 ftco-animate">
                            <div class="text w-100 text-center">
                                <h2>WELCOME TO GALAXY ENTERPRISES</h2>
                                <h1 class="mb-4">We Find You The Best Job in Overseas</h1>
                                <p><a href="#contact" class="btn btn-white">Connect with us</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <section id="contact" class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>Contact Us</h2>
                    <span class="subheading">Get in Touch</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <?php if (isset($success_message)) { echo "<p class='text-success'>$success_message</p>"; } ?>
                    <?php if (isset($error_message)) { echo "<p class='text-danger'>$error_message</p>"; } ?>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form-consultation">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" cols="30" rows="5" class="form-control" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control submit px-3 btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container-fluid px-lg-5">
            <div class="row">
                <div class="col-md-9 py-5">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">About us</h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                            <ul class="ftco-footer-social p-0">
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Contact Us</h2>
                            <p><strong>Phone:</strong><br>+91 85901 72642</p>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-4">
                            <h2 class="footer-heading">Our Locations</h2>
                            <p><strong>Kochi:</strong><br>Pulimuootil Arcade, 2nd Floor,<br>NH-47 Bypass, Near Prestige TMS Square,<br>Edapally South, Kochi, Kerala - 682024</p>
                            <p><strong>Thiruvananthapuram:</strong><br>Springs Building, TC/44/913/1, Floor No. 1,<br>Edappazhanji, Vazhuthacaud,<br>Thiruvananthapuram, Kerala - 695014</p>
                        </div>
                    </div>
                    <div class="row mt-md-5">
                        <div class="col-md-12">
                            <p class="copyright">
                                Copyright &copy; <?php echo date("Y"); ?> All rights reserved | Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Nexonix</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
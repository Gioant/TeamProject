<?php
include_once "../model/DB_Manager2.class.php";
include_once "../model/About.class.php";

$database = new DB_Manager2();
$get_about = $database->get_all_about();

foreach ($get_about as $about) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Restaurantly Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Restaurantly - v3.8.0
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>


<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0">Final Project</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
                <li><a class="nav-link scrollto" href="about.php">About</a></li>
                <li><a class="nav-link scrollto" href="services.php">Services</a></li>
                <li><a class="nav-link scrollto" href="portfolio.php">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
                <li><a class="nav-link scrollto" href="../admin/login.php">Admin</a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->


<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img name="about-image" src="assets/img/<?php echo $about['picture'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3 name="about-title">Voluptatem dignissimos provident quasi corporis voluptates sit
                        assumenda.</h3>
                    <!-- <p name="about-subtitle" class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i name="about-point1" class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </li>
                        <li><i name="about-point2" class="bi bi-check-circle"></i> Duis aute irure dolor in
                            reprehenderit in voluptate velit.
                        </li>
                        <li><i name="about-point3" class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                            storacalaperda mastiro dolore eu fugiat nulla pariatur.
                        </li>
                    </ul> -->
                    <p name="about-point4">
                        <!-- Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum -->
                        <?php echo $about['text'] ?>
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Why Us</h2>
                <p>Why Choose Our Restaurant</p>
            </div>

            <div class="row">

                <div class="col-lg-4">
                    <div class="box" data-aos="zoom-in" data-aos-delay="100">
                        <span>01</span>
                        <h4>Lorem Ipsum</h4>
                        <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero
                            placeat</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                        <span>02</span>
                        <h4>Repellat Nihil</h4>
                        <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire
                            leno para dest</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="300">
                        <span>03</span>
                        <h4> Ad ad velit qui</h4>
                        <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam
                            quis</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Chefs</h2>
                <p>Our Professional Chefs</p>
            </div>

            <div class="row justify-content-md-center">

                <div class="col-3">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <img name="about-nickpic" src="assets/img/chefs/nickk.jpg" class="img-fluid1" alt=""
                             height="416" width="416">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h3 name="about-name1">Nicholas Tsoukatos</h3>
                                <h4 name="about-title1">Team Leader</h4>
                                <h6 name="about-bio1">I need me a bad bitch</h6>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <img name="about-andypic" src="assets/img/chefs/andy.jpg" class="img-fluid1" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h3 name="about-name2">Anthony Giolti Funes</h3>
                                <h4 name="about-title2">Big Brain Genius</h4>
                                <h6 name="about-bio2">Andy graduated University at 8 years old and is now mama birding
                                    us newbies in coding</h6>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img name="about-jlpic" src="assets/img/chefs/jean-loup.jpg" class="img-fluid1" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h3 name="about-name3">Jean-Loup Davidson</h3>
                                <h4 name="about-title3">Hardworker</h4>
                                <h6 name="about-bio3">Finally got his first W in warzone last night</h6>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-3">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <img name="about-kevinpic" src="./assets/img/chefs/kevinChan.jpg" class="img-fluid1" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h3 name="about-name4">Kevin Chan</h3>
                                <h4 name="about-title4">Speed Checker</h4>
                                <h6 name="about-bio4">All Kevin does is work everyday</h6>
                            </div>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section><!-- End Chefs Section -->


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php
    include_once "./footer.php";
?>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
</footer><!-- End Footer -->


<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>
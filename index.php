<?php
  include('db/db.php');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/ico">
    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>

    

    <!-- header -->
    <?php include('nav.php') ?>
    <!-- //header -->

    <!-- banner section -->
    <section id="home" class="w3l-banner py-5">
        <div class="banner-content">
            <div class="container py-4">
                <div class="row align-items-center pt-sm-5 pt-4">
                    <div class="col-md-6">
                        <h3 class="mb-lg-4 mb-3">Your Kids Deserve The<span class="d-block">Best Education</span>
                        </h3>
                        <p class="banner-sub">Active Learning, Expert Teachers & Safe Environment</p>
                        <div class="d-flex align-items-center buttons-banner">
                            <a href="tel:+233 55 823 0501" class="btn btn-style mt-lg-5 mt-4">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 right-banner-2 text-end position-relative mt-md-0 mt-5">
                        <div class="sub-banner-image mx-auto">
                            <img src="assets/images/banner.png" class="img-fluid position-relative" alt=" ">
                        </div>
                        <div class="banner-style-1 position-absolute">
                            <div class="banner-style-2 position-relative">
                                <h4>Back to School</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //banner section -->

    <!-- mission visio core  -->
    <?php include('mission.php') ?>
    <!-- //mission visio core -->

    <!-- home image with content block -->
    <section class="w3l-servicesblock pt-lg-5 pt-4 pb-5 mb-lg-5" id="about">
        <div class="container pb-md-5 pb-4">
            <div class="row pb-xl-5 align-items-center">
                <div class="col-lg-6 position-relative home-block-3-left pb-lg-0 pb-5">
                    <div class="position-relative">
                        <img src="assets/images/img1.jpg" alt="" class="img-fluid radius-image">
                    </div>
                    <!-- <div class="imginfo__box">
                        <h6 class="imginfo__title">Get a Appointment Today!</h6>
                        <p></p>
                        <a href="tel:+233 55 823 0501"><i class="fas fa-phone-alt"></i>Call for booking</a>
                    </div> -->
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1 mt-lg-0 mt-5 pt-lg-0 pt-5">
                    <h3 class="title-style">Admission requirements and Form Submission</h3>
                    <p class="mt-4">Upon completing the admission form, please return it to the security post and inform us via email/call/WhatsApp. </p>

                    <p class="mt-4">Kindly attach the following to the admission form before returning it:</p>

                    <ul class="mt-4 list-style-lis pt-lg-1">
                        <li><i class="fas fa-check-circle"></i>Copies of three (3) terms’ reports or academic certificates from the previous school when student is coming from another school or is 4 years or older.</li>
                        <li><i class="fas fa-check-circle"></i>One passport-size picture</li>
                        <li><i class="fas fa-check-circle"></i>A copy of the photo page of your ward's passport or birth certificate as proof of his date of birth. </li>
                        <li><i class="fas fa-check-circle"></i>A copy of Immunization records or Doctor’s report where applicable</li>
                    </ul>
                    <a href="tel:+233 55 823 0501" class="btn btn-style mt-5">Inform Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- //home image with content block -->

    

    <!-- why choose block -->
    <section class="w3l-service-1 py-5">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
                <p class="text-uppercase">Why Choose Us</p>
                <h3 class="title-style">Tools For Teachers And Learners</h3>
            </div>
            <div class="row content23-col-2 text-center">
                <div class="col-md-6">
                    <div class="content23-grid content23-grid1">
                        <h4><a href="about.html">Expert Teachers</a></h4>
                    </div>
                </div>
                <div class="col-md-6 mt-md-0 mt-4">
                    <div class="content23-grid content23-grid2">
                        <h4><a href="about.html">Safe Environment</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //why choose block -->

    <!-- stats block -->
    <?php include('statistics.php') ?>
    <!-- //stats block -->

    <!-- testimonials block -->
    <?php include('testimonial.php') ?>
    <!-- //testimonials block -->

    <!-- blog block -->
    <?php include('posts.php') ?>
    <!-- //blog block -->

    <!-- footer block -->
    <?php include('footer.php') ?>
    <!-- //footer block -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>
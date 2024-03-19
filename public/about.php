<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <?php include "../model/login.php" ?>

    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!--Font Awesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS File Link-->
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>

    <!--header section start-->
    <section class="header">
        <div id="menu-btn" class="fas fa-bars"> </div>

        <a href="home.php" class="logo">Go See!</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="package.php">Packages</a>
            <a href="../model/book.php">Booking</a>
            <a href="contactus.php">Contact Us</a>
        </nav>

        <a href="../registration.php" class="sign">Sign in</a>
        <h3><?php echo $_SESSION['userName']; ?></h3>

    </section>
    <!--header section ends-->

    <div class="heading" style="background:url(../images/header-bg-1.png) no-repeat">
        <h1>About Us</h1>
    </div>

    <!--about section starts-->
    <section class="about">

        <div class="image">
            <img src="../images/about-img.jpg" alt="aboutIMG">
        </div>

        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>We know travel has a social, economic and environmental consequences.
                We must equip travelers with the knowledge to make informed choices
                about their impact, and inspire them to travel with generosity.</p>
            <p>We think everyone deserves to experience the joy of travel.
                Whatever your background or needs and no matter where you
                want to go: we are here to empower your journey.</p>

            <div class="icons-container">

                <div class="icons">
                    <i class="fas fa-map"></i>
                    <span>Top Destinations</span>
                </div>

                <div class="icons">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span>Affordable Price</span>
                </div>

                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 Services</span>
                </div>

            </div>
        </div>
    </section>
    <!--about section ends-->

    <!-- reviews section starts  -->
    <section class="reviews">

        <h1 class="heading-title">Tourists Reviews</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>We have just returned from a Thailand Holiday booked through Travel Online.We were a little apprehensive because after booking despite my phone calls and emails. However, it all went smoothly our flights, transfers and accomodation was exactly as we expected.</p>
                    <h3>John Smith</h3>
                    <span>Traveler</span>
                    <img src="../images/pic-1.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Phenomenal service. The ease of booking with travel online was fantastic. The when everything is booked, great communication and they delivered exactly what they said they would and more.Thank you travel online, I will book through your company again and again</p>
                    <h3>Bella Poarch</h3>
                    <span>Traveler</span>
                    <img src="../images/pic-2.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>I had full communication at all times with our travel agent.
                        Prompt responses when I needed to know an answer to one of my questions.
                        Pleasure to recommend Lisa to friends and use Travelonline in the future.Thank you travel online, I will book through your company again and again</p>
                    <h3>Madson</h3>
                    <span>Traveler</span>
                    <img src="../images/pic-3.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Phenomenal service. The ease of booking with travel online was fantastic. The when everything is booked, great communication and they delivered exactly what they said they would and more.
                        Thank you travel online, I will book through your company again and again</p>
                    <h3>Julia Alexa</h3>
                    <span>Traveler</span>
                    <img src="../images/pic-4.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Phenomenal service. The ease of booking with travel online was fantastic. The when everything is booked, great communication and they delivered exactly what they said they would and more.
                        Thank you travel online, I will book through your company again and again</p>
                    <h3>Yaeow</h3>
                    <span>Traveler</span>
                    <img src="../images/pic-5.png" alt="">
                </div>

                <div class="swiper-slide slide">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Phenomenal service. The ease of booking with travel online was fantastic. The when everything is booked, great communication and they delivered exactly what they said they would and more.
                        Thank you travel online, I will book through your company again and again</p>
                    <h3>Tessa</h3>
                    <span>Traveler</span>
                    <img src="../images/pic-6.png" alt="">
                </div>

            </div>

        </div>

    </section>
    <!-- reviews section ends -->

    <!--Footer Section Start-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="../model/book.php"><i class="fas fa-angle-right"></i> Booking</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Uses</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +880 188 2660 360</a>
                <a href="#"><i class="fas fa-phone"></i> +880 130 9040 483</a>
                <a href="#"><i class="fas fa-envelope"></i> travelsBD2122@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Dhaka, Bangladesh 4025</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>

        </div>

        <div class="credit">
            Created by <span>Afia & Nahin</span> | All Rights Reserved | 2022
        </div>

    </section>
    <!--Footer Section End-->

    <!--Swiper JS Link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--Custom JS Link-->
    <script src="js/script.js"></script>
</body>

</html>
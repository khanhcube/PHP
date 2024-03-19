<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <?php include "../login.php" ?>

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

        <a href="registration.php" class="sign">Sign in</a>
        <h3><?php echo $_SESSION['userName']; ?></h3>

    </section>
    <!--header section ends-->
    <div class="heading" style="background:url(../images/header-bg-1.png) no-repeat">
        <h1>Gallery</h1>
    </div>

    <!--Gallery Section Starts-->
    <section class="gallery">
        <div class="box-container">
            <div class="box">
                <img src="../images/g-1.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-2.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-3.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-4.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-5.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-6.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-7.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-8.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>

            <div class="box">
                <img src="../images/g-9.jpg" alt="">
                <div class="content">
                    <h3>Amazing Places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut omnis velit temporibus harum optio amet?</p>
                    <a href="package.php" class="btn">See More</a>
                </div>
            </div>


        </div>
    </section>
    <!--Gallery Section Ends-->

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
    <script src="../js/script.js"></script>
</body>

</html>
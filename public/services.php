<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Services</title>
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
        <h3><?php echo $_SESSION['user_name']; ?></h3>

    </section>
   <!--header section ends-->
   <div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
      <h1>Services</h1>

   </div>

   <!--Services Section Starts-->
   <section class="services" id="services">
      <div class="box-container">
         <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>Affordable Hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam suscipit et atque sapiente omnis.</p>
         </div>

         <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>Food & Drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam suscipit et atque sapiente omnis.</p>
         </div>

         <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>Safety Guides</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam suscipit et atque sapiente omnis.</p>
         </div>

         <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>Around the World</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam suscipit et atque sapiente omnis.</p>
         </div>

         <div class="box">
            <i class="fas fa-plane"></i>
            <h3>Fast and Safe Travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam suscipit et atque sapiente omnis.</p>
         </div>

         <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>Adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum magnam suscipit et atque sapiente omnis.</p>
         </div>
      </div>
   </section>
   <!--Services Section Ends-->

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
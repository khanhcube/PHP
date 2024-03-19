<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Package</title>
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
   <div class="heading" style="background:url(../images/header-bg-2.png) no-repeat">
      <h1>Packages</h1>

   </div>

   <!-- packages section starts  -->
   <section class="packages">

      <h1 class="heading-title">Top Destinations</h1>

      <div class="box-container">

         <div class="box">
            <img src="../images/p-1.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Mumbai </h3>
               <p>Mumbai, formerly Bombay, is big. It’s full of dreamers and hard-labourers, starlets and gangsters, stray dogs and exotic birds, artists and servants, fisherfolk and crorepatis (millionaires), and lots and lots of people.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $90.00 <span>$120.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/p-2.jpg" alt="p2">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Sydney </h3>
               <p>Sydney, spectacularly draped around its glorious harbour and beaches, has visual wow factor like few other cities. Scratch the surface and it only gets better. On the Wild Side National parks ring the city and penetrate right into its heart.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
               <div class="price"> $120.00 <span>$150.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/p-3.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Hawai </h3>
               <p>Sunrises and sunsets are so spectacular that they're cause for celebration all by themselves, such as atop Haleakalā volcano on Maui.Just look at these sugary beaches, Technicolor coral reefs and volcanoes adventurous spirits.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
               <div class="price"> $80.00 <span>$100.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/p-4.jpg" alt="p4">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Paris </h3>
               <p>Paris' monument-lined boulevards, museums, classical bistros and boutiques are enhanced by a new wave of multimedia galleries, creative wine bars, design shops and tech start-ups.The word 'Parisian' is synonymous with style.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $150.00 <span>$200.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/p-5.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Tokyo </h3>
               <p>More than any one sight, it's the city itself that enchants visitors. It's a sprawling, organic thing, stretching as far as the eye can see. Always changing, and with a diverse collection of neighborhoods, no two experiences of the city.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="far fa-star"></i>
               </div>
               <div class="price"> $95.00 <span>$110.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/p-6.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Egypt </h3>
               <p>The mighty Nile and magnificent monuments entice many to Egypt while the beguiling desert and lush delta wow visitors. Add in the country's long and lingering past and culture full of stories, it is a travelers dream.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/img-1.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> India </h3>
               <p>With its sumptuous mix of traditions, spiritual beliefs, festivals, architecture and landscapes, your memories of India will blaze bright long after you've left its shores.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/img-2.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Malaysia </h3>
               <p>Entwined by shared history, Southeast Asia’s terrific trio offer steamy jungles packed with wildlife,culinary sensations and multi-ethnic culture.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/img-3.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Canada </h3>
               <p>Canada is more than its hulking-mountain, craggy-coast good looks: it also cooks extraordinary meals, rocks cool culture and unfurls wild.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/img-4.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Japan </h3>
               <p>Japan is truly timeless, a place where ancient traditions are fused with modern life as if it were the most natural thing in the world.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/img-5.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> USA </h3>
               <p>The great American experience is about so many things: bluegrass and beaches,restaurant-loving cities and big open skies.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>

         <div class="box">
            <img src="../images/img-6.jpg" alt="p1">
            <div class="content">
               <h3><i class="fas fa-map-marker-alt"></i> Russia </h3>
               <p>The world's largest country offers it all, from historic cities and idyllic countryside to artistic riches, epic train rides nightlife.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <div class="price"> $85.00 <span>$105.00</span> </div>
               <a href="../model/book.php" class="btn">Book Now!</a>
            </div>
         </div>


      </div>

      <div class="load-more"><span class="btn">Load More</span></div>

   </section>
   <!-- packages section ends -->

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
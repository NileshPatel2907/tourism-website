<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Tourism.</a>

   <nav class="navbar">
      <a href="home.php" style="color:#8e44ad;">Home</a>
      <a href="about.php">About</a>
      <a href="packages.php">Packages</a>
      <a href="login.php">Login</a>
      <a href="register.php">Register</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/home_slide_1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="packages.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home_slide_2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="packages.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home_slide_3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="packages.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/tourism-logo.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>More Than 10 Years Of Experience, Variety Of Tour Packages, Best Deals And Personalised Services.</p>
      <p>Our dedicated travel team diligently works round-the-clock to design the best travel experiences 
         for the customers. The skilled team spends considerable amounts of time ideating tour packages that 
         guarantee to make travelling with us an experience like no other. We select the finest hotels in every 
         category, boast an excellent personal fleet of vehicles for transportation.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Best Glances </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/img11.jpg" alt="">
         </div>
         <div class="content">
            <h3>Taj mahal</h3>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img12.jpg" alt="">
         </div>
         <div class="content">
            <h3>Goa</h3>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/img13.jpg" alt="">
         </div>
         <div class="content">
            <h3>Jaisalmer</h3>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img14.jpg" alt="">
         </div>
         <div class="content">
            <h3>Bali</h3>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img15.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dalhousie</h3>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/img16.jpg" alt="">
         </div>
         <div class="content">
            <h3>Switzerland</h3>
         </div>
      </div>

   </div>

   <!-- <div class="load-more"> <a href="packages.php" class="btn">load more</a> </div> -->

</section>




<!-- footer section starts  -->

<section class="footer" style="background-image: url('images/footer.jpg');">

   <div class="box-container">

      <div class="box" style="width:100%; text-align:center;">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box" style="width:100%; text-align:center;">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-222-3333 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href=""> <i class="fas fa-envelope"></i> tourism@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Vadodara, Gujarat - 391750 </a>
      </div>

      <div class="box" style="width:100%; text-align:center;">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Nilesh Patel</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->




<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
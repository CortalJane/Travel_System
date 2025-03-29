<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Leading Travel Service</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>

</head>
<body>
   
   <!-- header section starts  -->

   <section class="header">

      <a href="home.php" class="logo"><img src="images/logo.jpg"></a>

      <nav class="navbar">
         <a href="home.php">home</a>
         <a href="about.php" class="active">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <a href="logout.php">logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

   <!-- header section ends -->

   <div class="heading" style="background:url(images/about2.jpg) no-repeat">
      <h1>about us</h1>
   </div>

   <!-- about section starts  -->

   <section class="about">

      <div class="image">
         <img src="images/car2.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why We Stand Out?</h3>
         <p>Choose Discover Bukidnon Travel because we offer an authentic and personalized approach to exploring the beauty and culture of Bukidnon. Our expert local guides craft unique itineraries tailored to your interests, ensuring you experience the province's stunning landscapes, thrilling adventures, and vibrant heritage in the most meaningful way. With a focus on sustainability, safety, and customer satisfaction, we go the extra mile to create unforgettable travel experiences that you won’t find anywhere else. Let us make your trip to Bukidnon truly exceptional!</p>
         <div class="icons-container">
            <div class="icons">
               <i class="fas fa-map"></i>
               <span>Top Destinations</span>
            </div>
            <div class="icons">
               <i class="fas fa-headset"></i>
               <span>24/7 Guide Service</span>
            </div>
            <div class="icons">
               <i class="fas fa-hand-holding-usd"></i>
               <span>Reasonable price</span>
            </div>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading-title"> Client's Reviews </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>My recent adventure in Bukidnon was absolutely incredible. 
                  The carefully curated adventures and expert recommendations 
                  led me to hidden spots and breathtaking locations I would’ve 
                  never discovered on my own. I’m already looking forward to my 
                  next trip!</p>
               <h3>Amie</h3>
               <span>Traveler</span>
               <img src="images/amie.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>  My recent Bukidnon tour was unforgettable! From exploring vibrant 
                  towns to discovering peaceful retreats, every moment was perfectly 
                  planned. The stunning landscapes and rich local culture made the 
                  experience truly special. It's a unique and immersive adventure!</p>
               <h3>Ash</h3>
               <span>Influencer & Vlogger</span>
               <img src="images/ash.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>Finding a balance between work and travel in Bukidnon was made effortless.
                  The thoughtful planning and excellent recommendations allowed me to make 
                  the most of my downtime and truly enjoy every moment. I’m already looking 
                  forward to my next trip with them!</p>
               <h3>Jane</h3>
               <span>Business Executive</span>
               <img src="images/jane.jpg" alt="">
            </div>
            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               
               <p>My research into Bukidnon’s historical landmarks was 
                  taken to new heights. The unique perspectives and in-depth 
                  insights provided a deeper understanding and appreciation 
                  of the sites I explored. I highly recommend this experience 
                  to fellow historians and cultural enthusiasts.</p>
               <h3>Lex</h3>
               <span>Cultural Historian</span>
               <img src="images/lex.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>As someone who’s always on the lookout for incredible travel experiences, 
                  my recent adventure in Bukidnon was truly unforgettable. The recommendations led me to stunning locations. 
                  Every moment felt like a new discovery. I’m already excited for my next trip! See you soon Bukidnon</p>
               <h3>Maricar</h3>
               <span>News Anchor</span>
               <img src="images/maricar.jpg" alt="">
            </div>

            <div class="swiper-slide slide">
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
               <p>As a branch manager, I appreciate well-organized experiences, and my trip 
                  to Bukidnon was exactly that. Expert recommendations led me to stunning 
                  hidden spots, making for a hassle-free and refreshing escape. I can’t wait to return!</p>
                  <br>
                  <br>
               <h3>Kobi</h3>
               <span>Branch Manager</span>
               <img src="images/kobi.jpg" alt="">
            </div>

         </div>

      </div>

   </section>

   <!-- reviews section ends -->
   <!-- footer section starts  -->
   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>Extra Links</h3>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
            <a href="Term_of_use.php"> <i class="fas fa-angle-right"></i> Terms of Use</a>
            <a href="Privacy_Policy.php"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         </div>
         <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +6390-6953-3351 </a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRzCbSrPgNxJJZLjjrkgWGthxnTFjPNTxvcNxxVWVjZffBqBsFQWjBZgbPLmsBsCVqHSWLjz"> <i class="fas fa-envelope"></i class="text-lowercase"> dalurashang@gmail.com </a>
         </div>
         <div class="box">
            <h3>Follow Us</h3>
            <a href="https://www.facebook.com/dalurawilson?mibextid=ZbWKwL"> <i class="fab fa-facebook-f"></i> Facebook </a>
            <a href="https://www.instagram.com/shynadelicano?igsh=YzljYTk1ODg3Zg=="> <i class="fab fa-instagram"></i> Instagram </a>
            <a href="https://www.tiktok.com/@shyyyieee08?_t=ZS-8uNRDUZNTsK&_r=1"> <i class="fab fa-tiktok"></i> Tiktok</a>
         </div>
      </div>
      <div class="credit"> Copyright © 2025 <span>Bukidnon Travel Tour.</span> | All Right Reserved. </div>
   </section>
   <!-- footer section ends -->
   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>
</html>
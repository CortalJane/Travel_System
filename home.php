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
         <a href="home.php" class="active">home</a>
         <a href="about.php">about</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <a href="logout.php">logout</a>

      </nav>
      <div id="menu-btn" class="fas fa-bars"></div>
   </section>
   <!-- header section ends -->
   <!-- home section starts  -->
   <section class="home">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>Look for, Explore, Communicate</span>
                  <h3>"Discover Bukidnon, Unforgettable Journeys."</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-4.webp) no-repeat">
               <div class="content">
                  <span>Look for, Explore, Communicate</span>
                  <h3>"New places, new perspectives."</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-5.jpg) no-repeat">
               <div class="content">
                  <span>Look for, Explore, Communicate</span>
                  <h3>"Let your soul shine."</h3>
                  <a href="package.php" class="btn">See more</a>
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
      <h1 class="heading-title"> Our Services </h1>
      <div class="box-container">
         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>Adventure</h3>
         </div>
         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>Tour Guide</h3>
         </div>
         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>Camping</h3>
         </div>
      </div>
   </section>
   <!-- services section ends -->
   <!-- home about section starts  -->
   <section class="home-about">
      <div class="image">
         <img src="images/car2.jpg" alt="">
      </div>
      <div class="content">
         <h3>About Us</h3>
         <p>At Discover Bukidnon Travel, we are passionate about showcasing the hidden gems of Bukidnon, a province in the heart of Mindanao. Our mission is to provide travelers with unique, personalized experiences that highlight the stunning landscapes, rich cultural heritage, and adventurous spirit of the region. From exploring lush mountains and tranquil lakes to immersing in the traditions of indigenous communities, we offer a variety of tours designed to suit every type of traveler. Let us help you create unforgettable memories in Bukidnon!</p>
         <a href="about.php" class="btn">Read More</a>
      </div>
   </section>
   <!-- home about section ends -->
   <!-- home packages section starts  -->
   <section class="home-packages">
      <h1 class="heading-title"> 0ur Packages </h1>
      <div class="box-container">
         
      <div class="box">
            <div class="image">
               <img src="images/lovers_lane.jpg" alt="">
            </div>
            <div class="content">
               <h3>Lover's Lane</h3>
               <p>Impasug-ong, Bukidnon</p>
               <p>A scenic viewpoint along the Old Sayre Highway, offering breathtaking views of surrounding mountains and valleys, making it a peaceful spot for relaxation and photography.</p>
               <h2>🚐</h2>
               <h3><li>₱999 per pax</li></h3>
               <h3><li>₱3,996 for 4 people</li></h3>
               <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
               <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>

               <div>
                  <a href="1lovers_act.php" class="btn">Activities</a>
               </div>
               <a href="book.php?location=Lovers%20Lane" class="btn">Book Now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/communal_ranch.jpg" alt="">
            </div>
            <div class="content">
               <h3>Communal Ranch</h3>
               <p>Impasug-ong, Bukidnon</p>
               <p>A peaceful rural destination where visitors can experience the beauty of expansive grasslands, livestock farming, and the natural charm of the region’s agricultural heritage.</p>
               <h2>🚐</h2>
               <h3><li>₱1,200 per pax</li></h3>
               <h3><li>₱4,800 for 4 people</li></h3>
               <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
               <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


               <div>
                  <a href="2com_act.php" class="btn">Activities</a>
               </div>
               <a href="book.php?location=Communal%20Ranch" class="btn">Book Now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/monastery.jpg" alt="">
            </div>
            <div class="content">
               <h3>Tranfiguration Monastry</h3>
               <p>Abbey in Malaybalay, Bukidnon</p>
               <p>A serene spiritual retreat known for its unique pyramid-shaped church, peaceful atmosphere, and beautiful natural surroundings.</p>
               
               <br>
               <h2>🚐</h2>  
               <h3><li>₱1,000 per pax</li></h3>
               <h3><li>₱4,000 for 4 people</li></h3>
               <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
               <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>

               

               <div>
                  <a href="3tran_act.php" class="btn">Activities</a>
               </div>
               <a href="book.php?location=Tranfiguration%20Monastry" class="btn">Book Now</a>
            </div>
         </div>

      </div>
      <div class="load-more"> <a href="package.php" class="btn">Load More</a> </div>
   </section>



   <!-- home offer section starts  -->
   <section class="home-offer home-packages">
      <div class="content">
         <div class="offerimage">
         <img src="images/offer.jpg">
         </div>
      </div>
      <div class="content">  
         <h3>12% OFF</h3>
      
         
         <p>If you're looking for a reliable, affordable, and comfortable travel experience, our van booking service is the perfect choice! 🚐 Whether you're planning a trip to Bukidnon’s top destinations like Dahilayan Adventure Park, Kampo Juan, or Lake Apo, we offer safe and hassle-free transportation with an experienced driver and fuel already included. Plus, with our flexible rates and discounts of up to 14%, you can enjoy the best travel deals without breaking the bank. Book with us today and experience a convenient, stress-free journey to your favorite destinations! 🌄✨</p>
      </div>
   </section>
   <!-- home offer section ends -->

   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
   <!-- footer section starts  -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>Quick Links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
         </div>
         <div class="box">
            <h3>Extra Links</h3>
            <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
            <a href="Term_of_use.php"> <i class="fas fa-angle-right"></i> Terms of Use</a>
            <a href="Privacy_Policy.php"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
         </div>
         <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +6390-6953-3351 </a>
            <a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcRzCbSrPgNxJJZLjjrkgWGthxnTFjPNTxvcNxxVWVjZffBqBsFQWjBZgbPLmsBsCVqHSWLjz#"> <i class="fas fa-envelope"></i class="text-lowercase"> dalurashang@gmail.com </a>
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

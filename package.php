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
      <a href="about.php">about</a>
      <a href="package.php" class="active">package</a>
      <a href="book.php">book</a>
      <a href="logout.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/home2.jpg) no-repeat">
   <h1>Packages</h1>
</div>

<!-- packages section starts  -->

<section class="packages">

   <h1 class="heading-title">Top Destinations</h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/lovers_lane.jpg" alt="">
         </div>
         <div class="content">
            <h3>Lover's Lane</h3>
            <p>Impasug-ong, Bukidnon</p>
            <p>A scenic viewpoint along the Old Sayre Highway, offering breathtaking views of surrounding mountains and valleys, making it a peaceful spot for relaxation and photography.</p>
            <br>
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
            <br>
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
            <br>
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

      <div class="box">
         <div class="image">
            <img src="images/cedar.jpg" alt="">
         </div>
         <div class="content">
            <h3>Center for Environmental Development and Recreation (CEDAR)</h3>
            <p>National Fores in Impasog-ong, Bukidnon</p>
            <p>A nature park that promotes environmental conservation and offers recreational activities such as hiking, camping, and educational tours amidst lush forests and scenic landscapes.</p>
            <h2>🚐</h2>  
            <h3><li>₱1,099 per pax</li></h3>
            <h3><li>₱4,396 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="4cedar_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Center for Environmental Development and Recreation (CEDAR)" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/nasuli.jpg" alt="">
         </div>
         <div class="content">
            <h3>Nasuli Spring</h3>
            <p>Malaybalay, Bukidnon</p>
            <p>A natural spring known for its crystal-clear, cool waters, surrounded by lush greenery, making it a popular spot for swimming and relaxation.</p>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <h2>🚐</h2>  
            <h3><li>₱999 per pax</li></h3>
            <h3><li>₱3,996 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="5nasuli_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Nasuli%20Spring" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/lake_apo.jpg" alt="">
         </div> 
         <div class="content">
            <h3>Lake Apo View Deck</h3>
            <p>Valencia City, Bukidnon</p>
            <p>Offers stunning panoramic views of Lake Apo, surrounded by lush greenery and rolling hills, making it a perfect spot for photography and nature appreciation.</p>
            <br>
            <br>
            <br>
            <br>
            <br>           
            <h2>🚐</h2>
            <h3><li>₱1,300 per pax</li></h3>
            <h3><li>₱5,200 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="6lake_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Lake%20Apo%20View%20Deck" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/kampo_juan.png" alt="">
         </div>
         <div class="content">
            <h3>Kampo Juan Eco-Adventure Farm</h3>
            <p>Manolo Fortich, Bukidnon</p>
            <p>Must-visit destination for thrill-seekers and nature lovers, offering unique activities like the Anicycle (bicycle zipline), hanging bridge, and breathtaking views of lush landscapes. 🌿🚴‍♂️</p>
            <h2>🚐</h2>
            <h3><li>₱1,400 per pax</li></h3>
            <h3><li>₱5,600 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="7kampo_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Kampo%20Juan%20Eco-Adventure%20Farm" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/vista_west.jpg" alt="">
         </div>
         <div class="content">
            <h3>Vista West Cafe</h3>
            <p>Libona, Bukidnon</p>
            <p>Vista West Café in Bukidnon is a charming hillside café offering breathtaking mountain views, a cozy ambiance, and delicious coffee and pastries, making it a perfect spot for relaxation and scenic dining. 🌄☕🍰</p>
            <h2>🚐</h2>
            <h3><li>₱1,300 per pax</li></h3>
            <h3><li>₱5,200 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="8vista_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Vista%20West%20Cafe" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/cafe_sa_bukid.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cafe sa Bukid</h3>
            <p>Lantapan, Bukidnon</p>
            <p>A cozy countryside café in Bukidnon, offering a relaxing farm-style ambiance, freshly brewed local coffee, and scenic mountain views perfect for unwinding. 🌿☕</p>
            <br>
            <br>
            <h2>🚐</h2>
            <h3><li>₱1,599 per pax</li></h3>
            <h3><li>₱6,396 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="9cafe_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Cafe%20sa%20Bukid" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/dahilayan.jpg" alt="">
         </div>
         <div class="content">
            <h3>Dahilayan Adventure Park</h3>
            <p>Manolo Fortich, Bukidnon</p>
            <p>A thrilling mountain resort in Bukidnon, famous for its Asia’s longest dual zipline, exciting outdoor activities, and refreshing cool climate, making it a must-visit adventure destination. 🌲🌄🎢</p>
            <h2>🚐</h2>
            <h3><li>₱3,000 per pax</li></h3>
            <h3><li>₱12,000 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>
            
            <div>
               <a href="10dahi_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Dahilayan%20Adventure%20Park" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/chukoohills.jpg" alt="">
         </div>
         <div class="content">
            <h3>Chukoohills Cafe & Resto</h3>
            <p>Lantapan, Bukidnon</p>
            <p>A hidden gem in Bukidnon, offering a cozy dining experience with breathtaking hilltop views, delicious local dishes, and a relaxing countryside ambiance. 🌿🍽️✨</p>
            <h2>🚐</h2>
            <h3><li>₱1,500 per pax</li></h3>
            <h3><li>₱6,000 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="11chuk_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Chukoohills%20Cafe%20%26%20Resto" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/chelly_s.jpg" alt="">
         </div>
         <div class="content">
            <h3>Chelly's Restaurant</h3>
            <p>Kiliog, Linuna, Bukidnon</p>
            <p>A popular dining spot in Bukidnon, known for its cozy atmosphere, delicious home-cooked meals, and friendly service, making it a great place for family gatherings. 🍽️😊</p>
            <h2>🚐</h2>
            <h3><li>₱1,200 per pax</li></h3>
            <h3><li>₱4,800 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>


            <div>
               <a href="12chellys_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Chelly's%20Restaurant" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/tourism_center.jpg" alt="">
         </div>
         <div class="content">
            <h3>Tourism Center</h3>
            <p>Impasug-ong, Bukidnon</p>
            <p>Serves as a gateway for travelers, offering essential information, maps, and guides to help visitors explore the province’s scenic attractions and cultural heritage. 🏞️📍</p>
            <h2>🚐</h2>
            <h3><li>₱999 per pax</li></h3>
            <h3><li>₱3,996 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>

            <div>
               <a href="13tourism_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Tourism%20Center" class="btn">Book Now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/ultra_winds.jpg" alt="">
         </div>
         <div class="content">
            <h3>Ultra Winds Mountain Resort</h3>
            <p>Baungon, Bukidnon</p>
            <p>A scenic getaway in Cagayan de Oro, offering breathtaking views, infinity pools, and a relaxing mountain retreat perfect for unwinding. 🌄🏊✨</p>
            <br>
            <br>
            <h2>🚐</h2>
            <h3><li>₱2,000 per pax</li></h3>
            <h3><li>₱8,000 for 4 people</li></h3>
            <span>📌 FREE Inclusions: Every booking comes with a professional driver and fuel at no extra cost, ensuring a smooth and worry-free travel experience.</span><br>
            <span>📌 Rates May Vary: Prices are subject to change based on travel distance, time, and availability. Contact us for an accurate quote tailored to your trip.</span>

            <div>
               <a href="14ultra_act.php" class="btn">Activities</a>
            </div>
            <a href="book.php?location=Ultra%20Winds%20Mountain%20Resort" class="btn">Book Now</a>
         </div>
      </div>

   </div>

   <div class="load-more"><span class="btn">See More</span></div>
   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

</section>

<!-- packages section ends -->
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

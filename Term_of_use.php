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
<!-- term of use section starts  -->
<section class="home-about">
   <div class="content">
      <h3 style="text-align: center;">Term of Use</h3>
      <p>By using the Choose Discover Bukidnon Travel website, you agree to comply with our terms and conditions. We provide travel tour services in Bukidnon, Mindanao, and all bookings are subject to availability and confirmation. Prices, itineraries, and policies may change without prior notice. We are not liable for unforeseen events such as weather disturbances, transportation delays, or accidents. Please ensure you review all booking details before confirming your reservation.</p>
      <a href="about.php" class="btn">Back</a>
   </div>
</section>

<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="Privacy_Policy.php"> <i class="fas fa-angle-right"></i> Privacy Policy</a>
      </div>
      <div class="box">
         <h3>Contact Info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +6390-6953-3351 </a>
         <a href="#"> <i class="fas fa-envelope"></i class="text-lowercase"> dalurashang@gmail.com </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
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

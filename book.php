<?php session_start(); ?> 

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
          // Define location prices
          const prices = {
              "Lovers Lane": 999.00,
              "Communal Ranch": 1200.00,
              "Tranfiguration Monastry": 1000.00,
              "Center for Environmental Development and Recreation (CEDAR)": 1099.00,
              "Nasuli Spring": 999.00,
              "Lake Apo View Deck": 1300.00,
              "Kampo Juan Eco-Adventure Farm": 1400.00,
              "Vista West Cafe": 1300.00,
              "Cafe sa Bukid": 1599.00,
              "Dahilayan Adventure Park": 3000.00,
              "Chukoohills Cafe & Resto": 1500.00,
              "Chelly's Restaurant": 1200.00,
              "Tourism Center": 999.00,
              "Ultra Winds Mountain Resort": 2000.00

          };

          function updateTotalPrice() {
              let location = $("#location").val();
              let guests = parseInt($("#guests").val()) || 1;
              let price = prices[location] || 0;
              let totalPrice = price * guests;

              $("#price").val(price.toFixed(2));
              $("#totalPrice").val(totalPrice.toFixed(2));
          }

          // Update total price when guests or location changes
          $("#guests").on("input", updateTotalPrice);
          updateTotalPrice();
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
      <a href="package.php">package</a>
      <a href="book.php" class="active">book</a>
      <a href="logout.php">logout</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/header3.jpg) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->
<section class="booking">
   <h1 class="heading-title">book your trip!</h1>

   <?php if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) { ?>
      <div class="success-message" style="margin-bottom: 20px;font-size: 20px;color: green;">
         <?php echo $_SESSION['success_message']; ?>
      </div>
      <?php unset($_SESSION['success_message']); } ?>

   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>Name :</span>
            <input type="text" placeholder="Enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="Enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>Phone No.:</span>
            <input type="tel" placeholder="Enter your number" name="phone" required>
         </div>
         <div class="inputBox">
            <span>Address :</span>
            <input type="text" placeholder="Enter your address" name="address" required>
         </div>
         <div class="inputBox">
            <span>Where to :</span>
            <input type="text" id="location" name="location" value="<?php echo isset($_GET['location']) ? htmlspecialchars($_GET['location']) : ''; ?>" readonly>
         </div>
         <div class="inputBox">
            <span>No. of guests :</span>
            <input type="number" id="guests" name="guests" min="1" value="1" required>
         </div>
         <div class="inputBox">
            <span>Price per guest :</span>
            <input type="text" id="price" name="price" value="0.00" readonly>
         </div>
         <div class="inputBox">
            <span>Total price :</span>
            <input type="text" id="totalPrice" name="total_price" value="0.00" readonly>
         </div>
         <div class="inputBox">
            <span>Departure :</span>
            <input type="date" name="departure" required>
         </div>
         <div class="inputBox">
            <span>Return :</span>
            <input type="date" name="returns" required>
         </div>
      </div>
      <input type="submit" value="Submit" class="btn" name="send">
      <a href="package.php" class="btn">Back</a>
   </form>
</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
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

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

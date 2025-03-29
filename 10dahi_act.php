<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
    <style>
        .card-body {
            background-color: lightgreen;
        }
        .card {
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            height: 350px;
            object-fit: cover;
        }
    </style>
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
    <!-- activities -->
    
    <section class="conatiner">
        <div class="card-body" style="text-align: center; background-color: lightgreen; border-radius: 15px; margin-top: 1rem;">
            <br>
            <h1 class="display-4"><strong>Recommended Activities in Dahilayan Adventure Park</strong></h1>
            <div class="container mt-5">
                <div class="row g-4">

                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/zipline1.jpg" class="card-img-top">
                            <div class="card">
                                <br>
                                <h5 class="h1">Zipline (840m)</h5>
                                <p class="h4">₱500.00</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/zipline2.jpg" class="card-img-top">
                            <div class="card">
                            <br>
                                <h5 class="h1">Zipline (320+150m)</h5>
                                <p class="h4">₱250.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success ">
                            <img src="images/dahi_act/skytower.jpg" class="card-img-top">
                            <div class="card">
                                <br>
                                <h5 class="h1">Skytower Base Jump</h5>
                                <p class="h4">₱400.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/ropes_course.jpg" class="card-img-top">
                            <div class="card">
                                <br>
                                <br>
                                <br>
                                <h5 class="h1">Ropes Course</h5>
                                <p class="h5">Kid's Below 4ft ₱150.00 (1st Level Only)</p>
                                <p class="h5">Adult ₱300.00 (All Levels)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/razonback.jpg" class="card-img-top">
                            <div class="card">
                                <br>                             
                                <h5 class="h1">Razonback Mountain Coaster</h5>
                                <p class="h5">Single Ride: ₱400.00</p>
                                <p class="h5">Double Ride: ₱500.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/python_roller.jpg" class="card-img-top">
                            <div class="card">
                                <br>
                                <br>
                                <br>
                                <br>                               
                                <h5 class="h1">Python Roller Zipride</h5>
                                <p class="h4">₱300.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/flying_lizard.jpg" class="card-img-top">
                            <div class="card">
                                <br>
                                <br>
                                <h5 class="h1">Flying Lizard Canopy Glider</h5>
                                <p class="h4">₱250.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-success">
                            <img src="images/dahi_act/dropzone.jpg" class="card-img-top">
                            <div class="card">
                                <br>
                                <h5 class="h1">Dropzone</h5>
                                <p class="h5">Single Rider: ₱500.00</p>
                                <p class="h5">Tandem / Pair: ₱750.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div>
               <a href="package.php" class="btn">Back</a>
            </div>
            <br>
        </div>
    </section>

    <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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
            <a href="#"> <i class="fas fa-envelope"></i class="text-lowercase"> Liamdalura@icloud.com </a>
            <a href="#"> <i class="fas fa-envelope"></i class="text-lowercase"> dalurashang@gmail.com </a>
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
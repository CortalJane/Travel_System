<?php

$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['send'])) {
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = isset($_POST['guests']) ? (int) $_POST['guests'] : 1; // Ensure guests is an integer and at least 1
   $departure = $_POST['departure'];
   $returns = $_POST['returns'];

   // Debugging: Check if guests is correctly retrieved
   if ($guests <= 0) {
      $guests = 1; // Ensure minimum guests is 1
   }

   // Define price per guest based on location
   $price = 0.00;
   switch ($location) {
      case "Lovers Lane":
         $price = 999.00;
         break;
      case "Communal Ranch":
         $price = 1200.00;
         break;
      case "Tranfiguration Monastry":
         $price = 1000.00;
         break;
      case "Center for Environmental Development and Recreation (CEDAR)":
         $price = 1099.00;
         break;
      case "Nasuli Spring":
         $price = 999.00;
         break;
      case "Lake Apo View Deck":
         $price = 1300.00;
         break;
      case "Kampo Juan Eco-Adventure Farm":
         $price = 1400.00;
         break;
      case "Vista West Cafe":
         $price = 1300.00;
         break;
      case "Cafe sa Bukid":
         $price = 1599.00;
         break;
      case "Dahilayan Adventure Park":
         $price = 3000.00;
         break;
      case "Chukoohills Cafe & Resto":
         $price = 1500.00;
         break;
      case "Chelly's Restaurant":
         $price = 1200.00;
         break;
      case "Tourism Center":
         $price = 999.00;
         break;
      case "Ultra Winds Mountain Resort":
         $price = 2000.00;
         break;
      default:
         $price = 0.00;
   }

   // Debugging: Check if price is correctly assigned
   if ($price <= 0) {
      echo "Error: Price for selected location not found.";
      exit;
   }

   // Calculate total price based on number of guests
   $total_price = $price * $guests;

   // Debugging: Check the computed total price
   if ($total_price <= 0) {
      echo "Error: Total price calculation failed.";
      exit;
   }

   // Insert data into the database
   $request = "INSERT INTO book_form(name, email, phone, address, location, price, guests, total_price, departure, returns) 
               VALUES ('$name', '$email', '$phone', '$address', '$location', '$price', '$guests', '$total_price', '$departure', '$returns')";

   if (mysqli_query($connection, $request)) {
      session_start();
      $_SESSION['success_message'] = "Booked successfully. Total Price: ₱" . number_format($total_price, 2);
      header('location:book.php');
      exit();
   } else {
      echo "Something went wrong, please try again!";
   }
} else {
   echo "Something went wrong, please try again!";
}

?>

<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'book_db');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input
    if (empty($email) || empty($password)) {
        echo "All fields are required.";
    } else {
        // Check user credentials
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                header('location:home.php');
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with that email.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(45deg, rgba(127, 230, 101, 0.36), rgb(197, 235, 91), rgb(118, 228, 75), rgb(84, 211, 168), rgb(205, 238, 114));
            background-size: 400% 400%;
            animation: gradient 7s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        h1 {
            color: black;
            font-family: "Sofia";
            font-size: 40px;
            font-weight: bold;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.3);
            margin-bottom: 30px;
            text-align: center;
        }

        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 30px;
            width: 90%;
            max-width: 900px;
        }

        .image-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            max-width: 300px;
        }

        .image-container img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .quote {
            font-size: 25px;
            font-style: italic;
            font-weight: bold;
            color: #2c3e50;
            margin-top: 10px;
            max-width: 300px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .container {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            padding: 40px;
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        h2 {
            color: #2d3e50;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input[type="email"],
        input[type="password"] {
            padding: 14px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 18px;
            width: 100%;
            outline: none;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px;
            border: none;
            border-radius: 6px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-footer {
            margin-top: 20px;
        }

        .form-footer a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        .form-footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 800px) {
            .wrapper {
                flex-direction: column;
                gap: 20px;
            }

            .image-container img {
                width: 100px;
                height: 100px;
            }

            .quote {
                font-size: 18px;
                max-width: 250px;
            }
        }
    </style>
</head>
<body>

<h1>Welcome to Bukidnon Travel Tour</h1>

<div class="wrapper">
    <div class="image-container">
        <img src="images/logo.jpg" alt="">
        <p class="quote">"Travel is the only thing you buy that makes you richer. Step outside your comfort 
        zone and discover the world's exciting experience"</p>
    </div>

    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" name="login" value="Login">
        </form>
        <div class="form-footer">
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
</div>

</body>
</html>

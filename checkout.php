<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spa and Salon</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
      --blue: #3498db;
      --red: #e74c3c;
      --orange: #f39c12;
      --black: #333;
      --white: #fff;
      --light-bg: #eee;
      --box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
      --border: 2px solid var(--black);
    }

    * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      border: none;
      text-decoration: none;
    }

    *::-webkit-scrollbar {
      width: 10px;
      height: 5px;
    }

    *::-webkit-scrollbar-track {
      background-color: transparent;
    }

    *::-webkit-scrollbar-thumb {
      background-color: var(--blue);
    }

    body {
      background-color: antiquewhite;
    }

    button {
      display: inline-block;
      padding: 10px 10px;
      cursor: pointer;
      font-size: 12px;
      transition: transform 0.2s ease-in-out;
      border-radius: 5px;
      text-transform: capitalize;
      background-color: #24a0ed;
      margin-top: 10px;
    }

    button:hover {

      color: var(--white);
      cursor: pointer;
    }

    button:active {
      transform: scale(0.95);
    }

    button input[type="submit"]:hover {
      color: var(--white);
      cursor: pointer;
    }


    button input[type="submit"] {
      padding: 5px 70px;
      border-radius: 5px;
      background-color: #24a0ed;
      transition: transform 0.2s ease-in-out;
    }

    .form-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      padding-bottom: 70px;
    }

    .form-container form h3 {
      font-size: 30px;
      margin-bottom: 10px;
      text-transform: uppercase;
      color: #3123ac;
    }

    .form-container form {
      width: 500px;
      border-radius: 5px;
      border: var(--border);
      padding: 20px;
      text-align: center;
      background-color: var(--white);
    }

    .form-container label {
      color: #153370;
      font-weight: 500;
    }

    .form-container form .box {
      width: 100%;
      border-radius: 5px;
      border: var(--border);
      padding: 12px 14px;
      font-size: 18px;
      margin: 10px 0;
    }

    footer {
      position: fixed;
      bottom: 0;
    }

    @media (max-height:800px) {
      footer {
        position: static;
      }

      header {
        padding-top: 40px;
      }
    }

    .footer-distributed {
      background-color: #2d2a30;
      box-sizing: border-box;
      width: 100%;
      text-align: left;
      font: bold 16px sans-serif;
      padding: 50px 50px 60px 50px;
      margin-top: 80px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
      display: inline-block;
      vertical-align: top;
    }

    /* Footer left */

    .footer-distributed .footer-left {
      width: 30%;
    }

    .footer-distributed h3 {
      color: #ffffff;
      font: normal 36px 'Cookie', cursive;
      margin: 0;
    }


    .footer-distributed h3 span {
      color: #e0ac1c;
    }

    /* Footer links */

    .footer-distributed .footer-links {
      color: #ffffff;
      margin: 20px 0 12px;
    }

    .footer-distributed .footer-links a {
      display: inline-block;
      line-height: 1.8;
      text-decoration: none;
      color: inherit;
    }

    .footer-distributed .footer-company-name {
      color: #8f9296;
      font-size: 14px;
      font-weight: normal;
      margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
      width: 35%;
    }

    .footer-distributed .footer-center i {
      background-color: #33383b;
      color: #ffffff;
      font-size: 25px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      text-align: center;
      line-height: 42px;
      margin: 10px 15px;
      vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
      font-size: 17px;
      line-height: 38px;
    }

    .footer-distributed .footer-center p {
      display: inline-block;
      color: #ffffff;
      vertical-align: middle;
      margin: 0;
    }

    .footer-distributed .footer-center p span {
      display: block;
      font-weight: normal;
      font-size: 14px;
      line-height: 2;
    }

    .footer-distributed .footer-center p a {
      color: #e0ac1c;
      text-decoration: none;
      ;
    }

    /* Footer Right */

    .footer-distributed .footer-right {
      width: 30%;
    }

    .footer-distributed .footer-company-about {
      line-height: 20px;
      color: #92999f;
      font-size: 13px;
      font-weight: normal;
      margin: 0;
    }

    .footer-distributed .footer-company-about span {
      display: block;
      color: #ffffff;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
      margin-top: 25px;
    }

    .footer-distributed .footer-icons a {
      display: inline-block;
      width: 35px;
      height: 35px;
      cursor: pointer;
      background-color: #33383b;
      border-radius: 2px;
      font-size: 20px;
      color: #ffffff;
      text-align: center;
      line-height: 35px;
      margin-right: 3px;
      margin-bottom: 5px;
    }

    .footer-distributed .footer-icons a:hover {
      background-color: #da9f87;
    }

    .footer-links a:hover {
      color: #da9f87;
    }

    @media (max-width: 880px) {

      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
      }

      .footer-distributed .footer-center i {
        margin-left: 0;
      }
    }




    @media (max-width:1200px) {
      .container .shopping-cart {
        overflow-x: scroll;
      }

      .container .shopping-cart table {
        width: 1200px;
      }
    }

    @media (max-width:450px) {
      .container .heading {
        font-size: 30px;
      }

      .container {
        height: 200px;
      }
    }
  </style>
</head>

<body>

  <div class="form-container">
    <form action="thankyou.php" method="POST">
      <h3>Please fill your details</h3>

      <label for="name">Name</label>
      <input type="text" id="name" name="name" required class="box"><br>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required class="box"><br>

      <label for="time">Time:</label>
      <input type="time" id="time" name="time" required class="box"><br>

      <label for="persons">Number of persons</label>
      <input type="number" id="persons" name="persons" required class="box"><br>

      <label for="address">Address</label>
      <textarea id="address" name="address" required class="box"></textarea></br>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required class="box"><br>
      <form method="post" action="thankyou.php">
      <button><input type="submit" value="Book"></button>
  </form>

    </form>
  </div>
  <script>
  // get the form element
  const form = document.querySelector('form');

  // add event listener to form submit event
  form.addEventListener('submit', (event) => {
    // prevent the form from submitting normally
    event.preventDefault();

    // show the success message
    alert('Booking successful!');
    
    // submit the form
    form.submit();
  });
</script>
  <footer class="footer-distributed">

    <div class="footer-left">
      <h3>REVIVE</h3>

      <p class="footer-links">
        <a href="#">Home</a>
        |
        <a href="#">About</a>
        |
        <a href="#">Contact</a>
        |
        <a href="#">Blog</a>
      </p>

      <p class="footer-company-name">Copyright © 2021 <strong>REVIVE</strong> All rights reserved</p>
    </div>

    <div class="footer-center">
      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Navi Mumbai</span>
          Maharashtra</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+91 74**9**258</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:sagar00001.co@gmail.com">xyz@gmail.com</a></p>
      </div>
    </div>
    <div class="footer-right">
      <p class="footer-company-about">
        <span>About the website</span>
        <strong>REVIVE</strong> Welcome to our luxurious spa,
        where relaxation and rejuvenation await you.

      </p>
      <div class="footer-icons">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
      </div>
    </div>
  </footer>

</body>

</html>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = isset($_POST['name']) ? $_POST['name'] : '';
  $date = isset($_POST['date']) ? $_POST['date'] : '';
  $time = isset($_POST['time']) ? $_POST['time'] : '';
  $persons = isset($_POST['persons']) ? $_POST['persons'] : '';
  $address = isset($_POST['address']) ? $_POST['address'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';

  if (empty($name) || empty($date) || empty($time) || empty($persons) || empty($address) || empty($email)) {
    die('Please fill out all required fields');
  }
  if (empty($name) || empty($date) || empty($time) || empty($persons) || empty($address) || empty($email)) {
    die('Please fill out all required fields');
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

    die('Please enter a valid email address.');
  }

  if (!ctype_digit($persons)) {

    die('Please enter a valid number of persons.');
  }

  // Sanitize the form data
  $name = htmlspecialchars($name);
  $date = htmlspecialchars($date);
  $time = htmlspecialchars($time);
  $persons = intval($persons);
  $address = htmlspecialchars($address);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);


  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'testing';

  $conn = mysqli_connect($host, $username, $password, $database);
  if (!$conn) {

    die('Could not connect to the database.');
  }

  // Insert the booking data into the database
  $query = "INSERT INTO bookings (name,date, time, persons, address, email) VALUES ('$name','$date', '$time', $persons, '$address', '$email')";
  $result = mysqli_query($conn, $query);

  if (!$result) {
    die('Could not insert the data into the database.');
  }
  



  mysqli_close($conn);



  exit();
}
?>
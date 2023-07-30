<?php include("header.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://kit.fontawesome.com/2ea2f2736f.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revive Spa and Salon</title>
  <style>
    body {
      background: antiquewhite;
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

    .pedicure-img {
      width: 300px;
      height: 200px;
    }

    .contacts {
      padding: 20px 20px;
      text-align: center;
      font-size: 40px;
      font-family: 'Playfair Display', serif;
    }

    #insta {
      padding: 10px;
      cursor: pointer;
    }

    #face {
      padding: 20px;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/facial.png" class="card-img-top img-fluid w-100 h-100" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Facial</h5>
              <p class="card-text">A facial is a family of skin care treatments for the face, including steam, exfoliation, extraction, creams, lotions, facial masks, peels, and massage. </p>
              <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 1">
              <input type="hidden" name="Price" value="200">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/pedicure.png" class="card-img-top img-fluid w-100 h-100 " alt="...">

            <div class="card-body text-center">
              <h5 class="card-title">Pedicure</h5>
              <p class="card-text">A pedicure is a cosmetic treatment of the feet and toenails.<br> In pedicure,the dead cells are rubbed off using a rough stone.</p>
              <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 2">
              <input type="hidden" name="Price" value="400">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/waxing.png" class="card-img-top w-100 h-100" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Waxing</h5>
              <p class="card-text">Waxing is the process of hair removal by using a covering of a wax,<br> a sticky substance and then removing and pulling the hair from the follicle . </p>
              &nbsp; <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 3">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/spa.jpg" class="card-img-top w-80 h-80" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Spa</h5>
              <p class="card-text"> SPA is an acronym of the Latin phrase Salus/Sanum per aquam or Sanitas per aquam, which translates as “health through water”.</p>
              <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 4">
              <input type="hidden" name="Price" value="600">
            </div>
          </div>

        </form>


      </div>
    </div>

  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/facial.png" class="card-img-top img-fluid w-100 h-100" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Facial</h5>
              <p class="card-text">A facial is a family of skin care treatments for the face, including steam, exfoliation, extraction, creams, lotions, facial masks, peels, and massage. </p>
              <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 1">
              <input type="hidden" name="Price" value="200">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/pedicure.png" class="card-img-top img-fluid w-100 h-100 " alt="...">

            <div class="card-body text-center">
              <h5 class="card-title">Pedicure</h5>
              <p class="card-text">A pedicure is a cosmetic treatment of the feet and toenails.<br> In pedicure,the dead cells are rubbed off using a rough stone.</p>
              <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 2">
              <input type="hidden" name="Price" value="400">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/waxing.png" class="card-img-top w-100 h-100" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Waxing</h5>
              <p class="card-text">Waxing is the process of hair removal by using a covering of a wax,<br> a sticky substance and then removing and pulling the hair from the follicle . </p>
              &nbsp; <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 3">
              <input type="hidden" name="Price" value="500">
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-3">
        <form action="manage_cart.php" method="POST">
          <div class="card">
            <img src="slides1/spa.jpg" class="card-img-top w-80 h-80" alt="...">
            <div class="card-body text-center">
              <h5 class="card-title">Spa</h5>
              <p class="card-text"> SPA is an acronym of the Latin phrase Salus/Sanum per aquam or Sanitas per aquam, which translates as “health through water”.</p>
              <button type="submit" class="btn btn-info" name="ADD_TO_CART">Add to cart</button>
              <input type="hidden" name="Item_Name" value="Item 4">
              <input type="hidden" name="Price" value="600">
            </div>
          </div>

        </form>


      </div>
    </div>

  </div>

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
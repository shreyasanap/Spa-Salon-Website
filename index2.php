
<!DOCTYPE html>
<html>

<head>
  <title>Revive Spa and Salon</title>
  <link rel='stylesheet' href='style.css'>
  <script src="script.js"></script>
  <script src="https://kit.fontawesome.com/2ea2f2736f.js" crossorigin="anonymous"></script>
  <link rel="icon" href="faith.ico">
  <style>
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

  </style>
</head>

<body bgcolor="antiquewhite">
  <div id="home">
    <img src="logo.png" alt="logo" width="200" ,height="80" class="center">

    <table border='0' face=black font='times' align='center'>
      <tr>
        <td><a href="#home">Home</a></td>
        <td><a href="#abtus">About Us</a></td>
        <td><a href="#joinus">Join Us</a></td>
        <td><a href="login.php">Login</a></td>
        <td><a href="register.php">Register</a></td>
    </table>
    <div class="slideshow-container">

      <div class="boxOnImg">
        <h2>Beauty is the wisdom of women, age is the beauty of the soul.Old age is a treasure.Don’t be late for the
          last date.When you feel beautiful, you look beautiful.We have got the good goods for your skin.</h2>

        <button><a href="<?php echo isset($_SESSION['cart']) ? 'checkout.php' : 'login.php'; ?>"
                            <?php if (!isset($_SESSION['cart'])) { ?>
                                onclick="alert('Please login')" <?php } ?>>
                           Book Now
                        </a></button>
        <!-- <a href="book_now">BOOK NOW</a> -->
        
      </div>


      <div class="mySlides fade">
        <div class="numbertext">1 / 5</div>
        <img src="slides2/uru1.jpg" style="width:100%">
        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 5</div>
        <img src="slides2/uru2.jpg" style="width:100%">
        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 5</div>
        <img src="slides2/uru3.jpg" style="width:100%">
        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">4 / 5</div>
        <img src="slides2/uru4.jpg" style="width:100%">
        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">5 / 5</div>
        <img src="slides2/uru5.jpg" style="width:100%">
        <div class="text"></div>
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      <span class="dot" onclick="currentSlide(4)"></span>
      <span class="dot" onclick="currentSlide(5)"></span>
    </div>

  </div>
  <script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      if (n > slides.length) { slideIndex = 1 }
      if (n < 1) { slideIndex = slides.length }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }
  </script>


  <div id="abtus">
    <div class="abtus">
      ABOUT US
      <div class="abtus_content">
        <p>
          Revive Salon & Spa is the ultimate place of pampering, relaxation and fun, all in one! Located in the
          Historical Downtown Melbourne District. Here at Revive we are a home for creative, talented and hardworking
          hair stylists, massage therapists and estheticians. Since June 2017, owner and operator Tiffany Rosenfield has
          prided herself and her wonderful team on making sure each and every client walks out feeling like their most
          beautiful self.
        <h3> Book your appointment today we can welcome you to the #SoRevive lifestyle!</h3>
        </p>

      </div>
    </div>
  </div>

  <div id="joinus">
    <div class="mail">
      JOIN US
    </div>
    <div class="bg-img" style="align-items: center;">

      
    </div>
  </div>
  <!--Testimonials------------------->
  <section id="testimonials">
    <!--heading--->
    <div class="testimonial-heading">
      <span>REVIEWS</span>
      <h1>Clients Says</h1>
    </div>
    <!--testimonials-box-container------>
    <div class="testimonial-box-container">
      <!--BOX-1-------------->
      <div class="testimonial-box">
        <!--top------------------------->
        <div class="box-top">
          <!--profile----->
          <div class="profile">
            <!--img---->
            <div class="profile-img">
              <img src="harry.png" />
            </div>
            <!--name-and-username-->
            <div class="name-user">
              <strong>Alexandra Will</strong>
              <span>@alexandrawill</span>
            </div>
          </div>
          <!--reviews------>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i><!--Empty star-->
          </div>
        </div>
        <!--Comments---------------------------------------->
        <div class="client-comment">
          <p>I had a recent hair emergency (someone ruined my hair) and I was lucky to get an appointment with Sophia at
            Revive who totally transformed my hair back!!! She was able to color correct my hair and give me a perfect
            mushroomy brown balayage which is what I was originally trying to get when my hair got messed up. She is
            super efficient and AMAZING at what she does. I’m happy to be able to trust her with my hair :)</p>
        </div>
      </div>
      <!--BOX-2-------------->
      <div class="testimonial-box">
        <!--top------------------------->
        <div class="box-top">
          <!--profile----->
          <div class="profile">
            <!--img---->
            <div class="profile-img">
              <img src="jk.png" />
            </div>
            <!--name-and-username-->
            <div class="name-user">
              <strong>Smita Jones</strong>
              <span>@smitajones</span>
            </div>
          </div>
          <!--reviews------>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i><!--Empty star-->
          </div>
        </div>
        <!--Comments---------------------------------------->
        <div class="client-comment">
          <p>I just recently went to this place as a recommendation from a family member and will say 100% the staff is
            super friendly, upbeat, knowledgeable and Tiffany did an amazing job on my hair! While she was doing my hair
            (color, highlights and cut) I was also able to watch her do hair extensions on someone else while my color
            was processing that turned out beautiful!! She really cares about her customers and makes sure every detail
            of what you want is met!</p>
        </div>
      </div>
      <!--BOX-3-------------->
      <div class="testimonial-box">
        <!--top------------------------->
        <div class="box-top">
          <!--profile----->
          <div class="profile">
            <!--img---->
            <div class="profile-img">
              <img src="emma.png" />
            </div>
            <!--name-and-username-->
            <div class="name-user">
              <strong>Emma Clief</strong>
              <span>@emmaclief</span>
            </div>
          </div>
          <!--reviews------>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i><!--Empty star-->
          </div>
        </div>
        <!--Comments---------------------------------------->
        <div class="client-comment">
          <p>Very professional. I was impressed that I could hear the music and my stylist Sofia speaking, all other
            salons I have been to do not compare to Revive. I can tell they use top of the line styling tools and
            products, this makes your experience relaxing and enjoyable. I came out feeling and looking like a million
            bucks. Thank you Sofia and Revive. This salon and spa is a must. Can't wait for my next appt.</p>
        </div>
      </div>
      <!--BOX-4-------------->
      <div class="testimonial-box">
        <!--top------------------------->
        <div class="box-top">
          <!--profile----->
          <div class="profile">
            <!--img---->
            <div class="profile-img">
              <img src="kris.png" />
            </div>
            <!--name-and-username-->
            <div class="name-user">
              <strong>Oliva</strong>
              <span>@Olivaadward</span>
            </div>
          </div>
          <!--reviews------>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i><!--Empty star-->
          </div>
        </div>
        <!--Comments---------------------------------------->
        <div class="client-comment">
          <p>I was treated well as a walk-in; that was refreshing :) To my surprise, they were able to accommodate me
            and the stylist was super cool. She also gave a really nice hair wash/massage. Pricing was reasonable and
            drinks are offered. Overall, an enjoyable experience!
            I would definitely like to visit this place agail:)</p>
        </div>
      </div>
    </div>
  </section>




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

  <script src="script.js"></script>
</body>

</html>
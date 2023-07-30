<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
            background-color: var(--light-bg);
        }

        .btn {
            display: inline-block;
            padding: 10px 30px;
            cursor: pointer;
            font-size: 18px;
            color: var(--white);
            border-radius: 5px;
            text-transform: capitalize;
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

        .btn:hover {
            background-color: var(--black);
        }

        .btn {
            background-color: var(--blue);
            margin-top: 10px;
        }

        .form-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            padding-bottom: 70px;
        }

        .form-container form {
            width: 500px;
            border-radius: 5px;
            border: var(--border);
            padding: 20px;
            text-align: center;
            background-color: var(--white);
        }

        .form-container form h3 {
            font-size: 30px;
            margin-bottom: 10px;
            text-transform: uppercase;
            color: var(--black);
        }

        .form-container form .box {
            width: 100%;
            border-radius: 5px;
            border: var(--border);
            padding: 12px 14px;
            font-size: 18px;
            margin: 10px 0;
        }

        .form-container form p {
            margin-top: 20px;
            font-size: 20px;
            color: var(--black);
        }

        .form-container form p a {
            color: var(--red);
        }

        .form-container form p a:hover {
            text-decoration: underline;
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

            .container .products .box-container .box img {
                height: 200px;
            }
        }
    </style>
</head>

<body>

    <div class="form-container">

        <form action="login_register.php" method="POST">
            <h3>register now</h3>

            <input type="text" placeholder="Full Name" name="fullname" class="box">
            <input type="text" placeholder="Username" name="username" class="box">
            <input type="email" placeholder="Email" name="email" class="box">
            <input type="password" placeholder="Password" name="password" class="box">
            <button type="submit" class="btn" name="register">Register</button>
            <p>already have an account? <a href="login.php">login now</a></p>
        </form>

    </div>
</body>

</html>
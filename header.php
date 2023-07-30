<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
  <link rel="icon" href="faith.ico">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Revive Spa and Salon</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item mx-sm-3">
            <a class="btn btn-outline-success" aria-current="page" href="index1.php">Home</a>
          </li>
          
        
        </ul>
      </div>

      <?php
      $count = 0;
      if (isset($_SESSION['cart'])) {
        $count = count($_SESSION['cart']);
      }
      ?>
      <a href="mycart.php" class="btn btn-success">My Cart(
        <?php echo $count; ?>)
      </a>
    </div>
    </div>
  </nav>
  
</body>

</html>
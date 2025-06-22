<?php

session_start();
if (!isset($_SESSION['user_data'])) {
  header("Location: login.php");
  exit;
}

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Welcome Page</title>


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="homepage.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log-out</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- page title -->
<section class="page-title bg-primary position-relative">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-white font-tertiary">Welcome!</h1>
      </div>
    </div>
  </div>

<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">shanizzaharvey1230@email.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">0993-123-4567</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">71 Baco Santa Teresita, Quezon City</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<script src="plugins/jQuery/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>

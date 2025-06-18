<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $users = file("user.txt", FILE_IGNORE_NEW_LINES);
  $found = false;

  foreach ($users as $userLine) {
    $data = explode("|", $userLine);

    // Check if indexes exist to avoid errors
    if (isset($data[10], $data[11]) && $data[10] === $username && $data[11] === $password) {
      $found = true;
      $_SESSION['user_data'] = $data;
      header("Location: homepage.php");
      exit;
    }
  }

  if (!$found) {
    $error = "<div class= 'alert alert-danger' role='alert'>Invalid username or password.</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Plugins -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link href="css/style.css" rel="stylesheet">

  <!-- Favicon -->
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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login.php">Log-in</a>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- Login Form -->
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Log in for more updates!</h2>
      </div>
      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <h4 class="mb-80">Kindly fill up your details</h4>

         

          <form action="login.php" method="post" class="row">
            <div class="col-md-12">
              <input type="text" id="username" name="username" placeholder="Username" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-md-12">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control px-0 mb-4" required>
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <input type="submit" name="login" value="Log-in" class="btn btn-primary w-100">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">shanizzaharvey1230@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">0906-056-4265</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">71 Baco La Loma, Quezon City</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="plugins/jQuery/jquery.min.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

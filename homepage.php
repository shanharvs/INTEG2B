<?php
session_start();
if (!isset($_SESSION['user_data'])) {
  header("Location: login.php");
  exit;
} else {
  $user = $_SESSION['user_data'];

  $fullname = $user[0];
  $gender = $user[1];
  $bob = $user[2];
  $phone = $user[3];
  $email = $user[4];
  $street = $user[5];
  $city = $user[6];
  $province = $user[7];
  $zip = $user[8];
  $country = $user[9];
  $username = $user[10];
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Welcome Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link href="css/style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <style>
    html, body {
      height: 100%;
    }

    .wrapper {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex: 1;
    }
  </style>
</head>

<body>
  <div class="wrapper">
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
    <section class="page-title bg-primary position-relative content">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="text-white font-tertiary">Welcome, <?php echo $username?>!</h1>

            <div class="col-lg-8 mx-auto">
              <div class="bg-white rounded text-center p-5 shadow-down">
                <h4 class="mb-4">Personal Information</h4>
                <p class="message-control px-0 mb-4">Name: <?php echo $fullname; ?></p>
                <p class="message-control px-0 mb-4">Gender: <?php echo $gender; ?></p>
                <p class="message-control px-0 mb-4">Date of Birth: <?php echo $bob; ?></p>
                <p class="message-control px-0 mb-4">Phone: <?php echo $phone; ?></p>
                <p class="message-control px-0 mb-4">Email: <?php echo $email; ?></p>
                <p class="message-control px-0 mb-4">Street: <?php echo $street; ?></p>
                <p class="message-control px-0 mb-4">City: <?php echo $city; ?></p>
                <p class="message-control px-0 mb-4">Province: <?php echo $province ?></p>
                <p class="message-control px-0 mb-4">ZIP: <?php echo $zip; ?></p>
                <p class="message-control px-0 mb-4">Country: <?php echo $country; ?></p>
                <p class="message-control px-0 mb-4">Username: <?php echo $username; ?></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="bg-dark mt-auto">
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
  </div>

  <script src="plugins/jQuery/jquery.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>

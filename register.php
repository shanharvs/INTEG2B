<?php

$full_name = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $full_name = trim($_POST["full_name"]);

  // Regex: Only letters and spaces, 2 to 50 characters
  if (!preg_match("/^[A-Za-z\s]{2,50}$/", $full_name)) {
    $message = "<div class='alert alert-danger'>Invalid full name. Only letters and spaces (2–50 characters) allowed.</div>";
  }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $full_name = $_POST['full_name'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $street = $_POST['street'];
  $city = $_POST['city'];
  $province = $_POST['province'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];

  $username = $_POST['username'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];


  if ($password != $confirm_password) {
    echo "<script>alert('Passwords do not match. Please try again.'); window.history.back();</script>";
  } else {
    $line = implode("|", [
      $full_name, $gender, $dob, $phone, $email,
      $street, $city, $province, $zip, $country,
      $username, $password
    ]) . "\n";
    file_put_contents("user.txt", $line, FILE_APPEND);
    
    echo "<script>
    alert('Registration successful! Proceeding to login...');
    window.location.href = 'login.php';
    </script>";
  }
}


?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Registration Form</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <style>
    /* Make sure all white boxes are same width and spaced */
    .section .col-lg-8.mx-auto {
      margin-bottom: 2.5rem; /* space between sections */
    }

    .bg-white {
      width: 100%;
      box-sizing: border-box; /* padding included in width */
    }

    /* Optional: Reduce excessive bottom margin on h4 */
    h4.mb-80 {
      margin-bottom: 2rem !important;
    }
  </style>
</head>

<body>

  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log-in</a>
        </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- contact -->
 <section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title">Registration Form</h2>
      </div>

      <div class="col-lg-8 mx-auto">
        <div class="bg-white rounded text-center p-5 shadow-down">
          <form action="#" method="post" class="row">

            <!-- Personal Information -->
            <div class="col-md-12">
              <h4 class="mb-4">Personal Information</h4>
              <input type="text" name="full_name" placeholder="Full Name" class="form-control px-0 mb-4">
              <select name="gender" class="form-control px-0 mb-4">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              <label>Date of Birth:</label>
              <input type="date" name="dob" class="form-control px-0 mb-4">
              <input type="tel" name="phone" placeholder="Phone Number" class="form-control px-0 mb-4">
              <input type="email" name="email" placeholder="Email" class="form-control px-0 mb-4">
            </div>

            <!-- Address Details -->
            <div class="col-md-12 mt-4">
              <h4 class="mb-4">Address Details</h4>
              <input type="text" name="street" placeholder="Street" class="form-control px-0 mb-4">
              <input type="text" name="city" placeholder="City" class="form-control px-0 mb-4">
              <input type="text" name="province" placeholder="Province/State" class="form-control px-0 mb-4">
              <input type="text" name="zip" placeholder="Zip Code" class="form-control px-0 mb-4">
              <input type="text" name="country" placeholder="Country" class="form-control px-0 mb-4">
            </div>

            <!-- Account Details -->
            <div class="col-md-12 mt-4">
              <h4 class="mb-4">Account Details</h4>
              <input type="text" id="username" name="username" placeholder="Username" class="form-control px-0 mb-4">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control px-0 mb-4">
              <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" class="form-control px-0 mb-4">
            </div>

            <!-- Buttons -->
            <div class="col-lg-6 col-10 mx-auto">
              <input type="reset" value="Reset" class="btn btn-light w-100">
            </div>
            <div class="col-lg-6 col-10 mx-auto">
              <input type="submit" name="register" value="Register" class="btn btn-primary w-100">
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- /contact -->

  <!-- footer -->
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
  <!-- /footer -->

  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- filter -->
  <script src="plugins/shuffle/shuffle.min.js"></script>

  <!-- Main Script -->
  <script src="js/script.js"></script>

</body>

</html>

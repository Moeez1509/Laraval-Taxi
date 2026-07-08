<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

require_once __DIR__ . '/../config/connect.php';
require_once __DIR__ . '/../config/constant.php';

$profileImageUrl = ROOT_URL . '/assets/img/profile-images/';

if (isset($_SESSION['uid'])) {
  $uid = (int) $_SESSION['uid'];

  $stmt = mysqli_prepare($con, "SELECT name, profile_image FROM users WHERE id = ? LIMIT 1");
  if ($stmt) {
    mysqli_stmt_bind_param($stmt, "i", $uid);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $name, $profileImage);

    if (mysqli_stmt_fetch($stmt)) {
      if ((!isset($_SESSION['name']) || $_SESSION['name'] === '') && $name !== null && $name !== '') {
        $_SESSION['name'] = $name;
      }

      if ($profileImage !== null && trim($profileImage) !== '') {
        $profileImage = trim($profileImage);
        if (preg_match('#^https?://#i', $profileImage)) {
          $profileImageUrl = $profileImage;
        } else {
          // If DB only stores a filename, default it to assets/img/profile-images/<file>
          if (strpos($profileImage, '/') === false && strpos($profileImage, '\\') === false) {
            $profileImage = 'assets/img/profile-images/' . $profileImage;
          }
          $profileImageUrl = ROOT_URL . ltrim($profileImage, '/');
        }
      }
    }

    mysqli_stmt_close($stmt);
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taxi</title>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <style>
    .pac-container {
      z-index: 9999 !important;
    }
  </style>
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>
  <header class="header">
    <div class="branding d-flex align-items-center  fixed-top bg-light">

      <div class="container position-relative d-flex align-items-center justify-content-between ">

        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="assets/img/logo.png" alt="">
          <h1 class="sitename">Quick Ride</h1>
        </a>
        <nav id="navmenu" class="navmenu flex-grow-1  justify-content-center">
          <ul class="justify-content-center">

            
            <?php if (!isset($_SESSION['uid'])): ?>
              
              <!-- 👤 Guest -->
              <li><a href="index.php">Home</a></li>
              <li><a href="aboutus.php">About Us</a></li>
              <li><a href="blogs.php">Blogs</a></li>
              <li><a href="faqs.php">FAQs</a></li>
              <li><a href="contact.php">Contact</a></li>

            <?php else: ?>

              <?php if ($_SESSION['role'] == 'passenger'): ?>

                <!-- 🧍 Passenger -->
                <li><a href="passenger-dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="ride-history.php">Ride History</a></li>
                <li><a href="upcoming-jobs.php">Upcoming Jobs</a></li>
                <li><a href="coupons.php">Coupons</a></li>
                <li><a href="mywallet.php">My Wallet</a></li>
                <li><a href="card.php">Card</a></li>
                <li><a href="manage-account.php">Manage Account</a></li>

              <?php elseif ($_SESSION['role'] == 'driver'): ?>

                <!-- 🚗 Driver -->
                <li><a href="driver-home.php">Home</a></li>
                <li><a href="history.php">History</a></li>
                <li><a href="manage-cards.php">Manage Cards</a></li>
                <li><a href="manage-vehicle.php">Manage Vehicle</a></li>
                <li><a href="manage-documents.php">Manage Documents</a></li>
                <li><a href="payout-settings.php">Payout Settings</a></li>
                <li><a href="my-profile.php">My Profile</a></li>

              <?php endif; ?>

            <?php endif; ?>


          </ul>

        </nav>
        <?php if (!isset($_SESSION['uid'])): ?>

          <a class="btn btn-primary" href="signup.php">Sign Up</a>
          <a class="ms-2" href="login.php">Login</a>

        <?php else: ?>


           <div class="rounded-circle border border-primary d-flex align-items-center justify-content-center overflow-hidden"
     style="width: 40px; height: 40px;">
    
    <img src="<?= $profileImageUrl ?>" 
         class="w-100 h-100 object-fit-cover" 
         alt="Profile image">
</div>
           <a class="btn btn-danger" href="logout.php">Logout</a>

        <?php endif; ?>
                  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>


      </div>

    </div>
  </header>

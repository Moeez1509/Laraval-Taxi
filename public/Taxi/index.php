<?php require_once __DIR__ . '/partials/header.php'; ?>
<?php
// get back form data if there was a registration error
$errors = $_SESSION['booknow_errors'] ?? [];
$firstname = $_SESSION['booknow_data']['firstname'] ?? null;
$lastname = $_SESSION['booknow_data']['lastname'] ?? null;
$contact = $_SESSION['booknow_data']['contact'] ?? null;
$dropoff_name = $_SESSION['booknow_data']['dropoff_name'] ?? null;
$dropoff_phone = $_SESSION['booknow_data']['dropoff_phone'] ?? null;
$email = $_SESSION['booknow_data']['email'] ?? null;
$pickup = $_SESSION['booknow_data']['pickup_address'] ?? null;
$dropoff = $_SESSION['booknow_data']['dropoff_address'] ?? null;
$scheduled_time = $_SESSION['booknow_data']['scheduled_pickup_time'] ?? null;
$services = $_SESSION['booknow_data']['services_type'] ?? null;
$flight_number = $_SESSION['booknow_data']['flight_number'] ?? null;
$request_type = $_SESSION['booknow_data']['request_type'] ?? 'transportation';
$request_type = in_array($request_type, ['transportation', 'delivery'], true) ? $request_type : 'transportation';
$baggage_small = $_SESSION['booknow_data']['baggage_small'] ?? $_SESSION['booknow_data']['small_baggage'] ?? $_SESSION['booknow_data']['baggege_small'] ?? null;
$baggage_large = $_SESSION['booknow_data']['baggage_large'] ?? $_SESSION['booknow_data']['large_baggage'] ?? $_SESSION['booknow_data']['baggege_large'] ?? null;
$adults = $_SESSION['booknow_data']['adults'] ?? null;
$children = $_SESSION['booknow_data']['children'] ?? null;
$notes = $_SESSION['booknow_data']['additional_notes'] ?? null;
$pickup_lat = $_SESSION['booknow_data']['pickup_lat'] ?? null;
$pickup_lng = $_SESSION['booknow_data']['pickup_lng'] ?? null;
$dropoff_lat = $_SESSION['booknow_data']['dropoff_lat'] ?? null;
$dropoff_lng = $_SESSION['booknow_data']['dropoff_lng'] ?? null;
$termsChecked = !empty($_SESSION['booknow_data']['terms']);
$payment_status = $_SESSION['booknow_data']['payment_status'] ?? null;
// delete signup data session
unset($_SESSION['booknow_errors']);
unset($_SESSION['booknow_data']);
?>


<div class="container">
  <div class="row align-items-center">

    <!-- Left Side Text -->
    <div class="col-lg-6">
      <div class="py-4 mb-4">
        <h3>Book Your Local Ride Instantly</h3>
        <p>Fast, reliable, and affordable taxi service for your city. Trusted by thousands of local riders.</p>
        <p>
          The Perfect Ride for the Perfect Night!
          The freedom to go anywhere and have fun but know you will get home safely.
          All you need is an app and a destination.
        </p>
      </div>
    </div>

    <!-- Right Side Image -->
    <div class="col-lg-6 position-relative d-inline-block mb-7 mb-lg-0">

      <img src="assets/img/ChatGPT Image Mar 14, 2026, 02_10_20 PM.png" class="img-fluid rounded-2" alt="ride">

      <!-- Bottom UI Card -->
      <div class="position-absolute bottom-0 start-0 s-2">
        <div class="d-flex align-items-center bg-white shadow rounded-4 px-4 py-2">
          <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center me-3"
            style="width:45px;height:40px;">
            <span class="text-white"><i class="fa-solid fa-car-rear"></i></span>
          </div>

          <div>
            <div class="text-muted small">Available 24/7</div>
            <div class="fw-semibold">500+ Drivers</div>
          </div>

        </div>
      </div>

    </div>

  </div>

</div>
<!-- book your ride -->
<div class="container">
  <div>
    <h2 class="text-center mt-5">Book Your Ride</h2>
    <p class="text-center">The freedom to go anywhere and have fun but know you will get home safely.
      All you need is an app and a destination.</p>
  </div>
  <?php if (isset($_SESSION['booknow-success'])): ?>
    <div class="alert alert-success alert-dismissible fade show text-center"  data-bs-delay="5000">
      <p><?= $_SESSION['booknow-success']; ?></p>
  
</div>
    <?php unset($_SESSION['booknow-success']); ?>
    <?php endif; ?>

  <form action="<?= ROOT_URL ?>index-logic.php" method="POST" class="form" enctype="multipart/form-data">

    <!-- Booking For -->

    <div class="form-group mb-4 shadow-sm p-4 rounded-5">
      <div class="row justify-content-center">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="btn btn-primary mb-3">
              <input type="radio" class="btn-check" name="request_type" id="request_transportation" value="transportation" <?= $request_type === 'transportation' ? 'checked' : '' ?>>
              <label class="request-pill request-pill--transportation" for="request_transportation">TRANSPORTATION</label>
             </div>
              <div class="btn btn-primary mb-3">
              <input type="radio" class="btn-check" name="request_type" id="request_delivery" value="delivery" <?= $request_type === 'delivery' ? 'checked' : '' ?>>
              <label class="request-pill request-pill--delivery" for="request_delivery">DELIVERY</label>
            </div>

            <h6 class="fw-bold mb-3">Request for</h6>

            <div class="input-group bg-light rounded-pill px-2 py-2">

              <span class="input-group-text bg-transparent border-0">
                <i class="fa fa-user"></i>
              </span>

              <select class="form-select border-0 bg-transparent shadow-none">
                <option>Myself</option>
                <option>Guest</option>
              </select>

            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- Contact Information -->
    <div class="form-group mb-4 shadow-sm p-4 rounded-5">
      <div class="row justify-content-center">
        <div class="row justify-content-center">
          <h6 class="fw-bold mb-3 text-center">Contact Information</h6>

          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2 ">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa fa-user"></i>
              </span>
              <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="First Name"
                class="form-control border-0 bg-transparent shadow-none<?= isset($errors['firstname']) ? ' is-invalid' : '' ?>">
              <input type="text" name="lastname" value="<?= $lastname ?>"
                class="form-control border-0 bg-transparent shadow-none " placeholder="Last name">
            </div>
            <?php if (isset($errors['firstname'])): ?>
              <div class="text-danger small mt-1"><?= $errors['firstname'] ?></div>
            <?php endif; ?>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-address-book"></i>
              </span>
              <input type="text" name="contact" value="<?= $contact ?>"
                class="form-control border-0 bg-transparent shadow-none<?= isset($errors['contact']) ? ' is-invalid' : '' ?>"
                placeholder="Enter Contact Number">
            </div>
            <?php if (isset($errors['contact'])): ?>
              <div class="text-danger small mt-1"><?= $errors['contact'] ?></div>
            <?php endif; ?>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-envelope"></i>
              </span>
              <input type="email" name="email" value="<?= $email ?>"
                class="form-control border-0 bg-transparent shadow-none<?= isset($errors['email']) ? ' is-invalid' : '' ?>"
                placeholder="Enter your Email">
            </div>
            <?php if (isset($errors['email'])): ?>
              <div class="text-danger small mt-1"><?= $errors['email'] ?></div>
            <?php endif; ?>
          </div>

          <div id="deliveryFields" class="row justify-content-center" style="<?= $request_type === 'delivery' ? '' : 'display:none;' ?>">
            <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
              <div class="input-group bg-light rounded-pill px-2 py-2">
                <span class="input-group-text bg-transparent border-0">
                  <i class="fa fa-user"></i>
                </span>
              <input type="text" name="dropoff_name" value="<?= $dropoff_name ?>"
                  class="form-control border-0 bg-transparent shadow-none<?= isset($errors['dropoff_name']) ? ' is-invalid' : '' ?>"
                  placeholder="Enter Dropoff Name">
              </div>
              <?php if (isset($errors['dropoff_name'])): ?>
                <div class="text-danger small mt-1"><?= $errors['dropoff_name'] ?></div>
              <?php endif; ?>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 text-center mt-3">
              <div class="input-group bg-light rounded-pill px-2 py-2">
                <span class="input-group-text bg-transparent border-0">
                  <i class="fa-solid fa-address-book"></i>
                </span>
                <input type="text" name="dropoff_phone" value="<?= $dropoff_phone ?>"
                  class="form-control border-0 bg-transparent shadow-none<?= isset($errors['dropoff_phone']) ? ' is-invalid' : '' ?>"
                  placeholder="Enter Dropoff Phone Number">
              </div>
              <?php if (isset($errors['dropoff_phone'])): ?>
                <div class="text-danger small mt-1"><?= $errors['dropoff_phone'] ?></div>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- Ride Details -->
    <div class="container my-5">
      <!-- <form action="index.php" method="post"> -->

      <div class="shadow-sm p-4 rounded-5">
        <h6 class="fw-bold mb-4 text-center">Ride Details</h6>

        <div class="row justify-content-center g-3">

          <!-- Pickup -->
          <div class="col-lg-4 col-md-6">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-map"></i>
              </span>
              <input type="hidden" name="pickup_lat" value="<?= $pickup_lat ?>" id="pickup_lat">
              <input type="hidden" name="pickup_lng" value="<?= $pickup_lng ?>" id="pickup_lng">
              <input type="text" id="pickup" name="pickup_address" value="<?= $pickup ?>"
                class="form-control border-0 bg-transparent shadow-none<?= isset($errors['pickup_address']) ? ' is-invalid' : '' ?>"
                placeholder="Enter Pickup Location">

              <button type="button" class="btn border-0" onclick="openMap('pickup')">
                <i class="fa-solid fa-map-location-dot"></i>
              </button>
            </div>
            <?php if (isset($errors['pickup_address'])): ?>
              <div class="text-danger small mt-1"><?= $errors['pickup_address'] ?>
              </div>
            <?php endif; ?>
          </div>

          <!-- Dropoff -->
          <div class="col-lg-4 col-md-6">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-map"></i>
              </span>
              <input type="hidden" name="dropoff_lat" value="<?= $dropoff_lat ?>" id="dropoff_lat">
              <input type="hidden" name="dropoff_lng" value="<?= $dropoff_lng ?>" id="dropoff_lng">
              <input type="text" id="dropoff" name="dropoff_address" value="<?= $dropoff ?>"
                class="form-control border-0 bg-transparent shadow-none<?= isset($errors['dropoff_address']) ? ' is-invalid' : '' ?>"
                placeholder="Enter Dropoff Location">

              <button type="button" class="btn border-0" onclick="openMap('dropoff')">
                <i class="fa-solid fa-map-location-dot"></i>
              </button>
            </div>
            <?php if (isset($errors['dropoff_address'])): ?>
              <div class="text-danger small mt-1"><?= $errors['dropoff_address'] ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <!-- MAP MODAL -->
        <div class="modal fade" id="mapModal" tabindex="-1">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <input id="mapSearch" type="text" class="form-control mb-2" placeholder="Search location...">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <div class="modal-body">
                <div id="map" style="height:400px;width:100%;"></div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="confirmLocation()">Confirm Location</button>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!-- </form> -->
    </div>
    <!-- Schedule -->
    <div class="form-group mb-4 shadow-sm p-4 rounded-5">
      <!-- <form action="index.php" method="post"> -->
      <div class="row justify-content-center">
        <div class="row justify-content-center">
          <h6 class="fw-bold mb-3 text-center">Schedule</h6>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2 ">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-calendar"></i>
              </span>
              <input type="datetime-local" name="scheduled_pickup_time" value="<?= $scheduled_time ?>"
                class="form-control border-0 bg-transparent shadow-none<?= isset($errors['scheduled_pickup_time']) ? ' is-invalid' : '' ?>"
                placeholder="Date & Time">

            </div>
            <?php if (isset($errors['scheduled_pickup_time'])): ?>
              <div class="text-danger small mt-1"><?= $errors['scheduled_pickup_time']?></div>
            <?php endif; ?>
          </div>


        </div>
      </div>
    </div>

    <!-- Ride Details -->
    <div class="form-group mb-4 shadow-sm p-4 rounded-5">
      <!-- <form action="index.php" method="post"> -->
      <div class="row justify-content-center">
        <div class="row justify-content-center">
          <h6 class="fw-bold mb-3 text-center">Ride Details</h6>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2 ">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-car"></i>
              </span>
              <select
                class="form-select border-0 bg-transparent shadow-none<?= isset($errors['services_type']) ? ' is-invalid' : '' ?>"
                name="services_type">
                <option>Economy</option>
                <option>Sharing Ride</option>
                <option>Rishkaw</option>
                <option>Taxi 1-4</option>
              </select>

            </div>
            <?php if (isset($errors['services_type'])): ?>
              <div class="text-danger small mt-1"><?= $errors['services_type']?></div>
              
            <?php endif; ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-plane"></i>
              </span>
              <input type="text" name="flight_number" value="<?= $flight_number ?>"
                class="form-control border-0 bg-transparent shadow-none" placeholder="Flight Number Or Train Number">

            </div>

          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-suitcase"></i>
              </span>
              <input type="number" name="small_baggage" value="<?= $baggage_small ?>"
                class="form-control border-0 bg-transparent shadow-none" placeholder="Small Baggege">

            </div>
          </div>

          <div class="col-lg-4 col-md-6 g-3 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-suitcase-rolling"></i>
              </span>
              <input type="number" name="large_baggage" value="<?= $baggage_large ?>"
                class="form-control border-0 bg-transparent shadow-none" placeholder="Large Baggege">

            </div>
          </div>


          <div class="col-lg-4 col-md-6 g-3 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-users"></i>
              </span>
              <input type="number" name="adults" value="<?= $adults ?>"
                class="form-control border-0 bg-transparent shadow-none" placeholder="Number of Adults">

            </div>
          </div>

          <div class="col-lg-4 col-md-6 g-3 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-users"></i>
              </span>
              <input type="number" name="children" value="<?= $children ?>"
                class="form-control border-0 bg-transparent shadow-none" placeholder="Number of Children">

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Notes -->
    <div class="form-group mb-4 shadow-sm p-4 rounded-5">
      <!-- <form action="index.php" method="post"> -->
      <div class="row justify-content-center">
        <div class="row justify-content-center">
          <h6 class="fw-bold mb-3 text-center">Additional Notes</h6>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2 ">
              <input type="text" name="additional_notes" value="<?= $notes ?>"
                class="form-control border-0 bg-transparent shadow-none"
                placeholder="Please enter your extra details here">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Confirmation  -->
    <div class="form-group mb-4 shadow-sm p-4 rounded-5">
      <!-- <form action="index.php" method="post"> -->
      <div class="row justify-content-center">
        <div class="row justify-content-center">
          <h6 class="fw-bold mb-3 text-center">Confirmation</h6>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2 ">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-money-bill"></i>
              </span>
              <select class="form-select border-0 bg-transparent shadow-none<?= isset($errors['payment_status']) ? ' is-invalid' : '' ?>"
                name="payment_status" >
                <option value="cash">Cash</option>
                <option value="card">Card</option>
              </select>
            </div>
             <?php if (isset($errors['payment_status'])): ?>
              <div class="text-danger small mt-1"><?= $errors['payment_status']?></div>
            <?php endif; ?>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 text-center">
            <div class="input-group bg-light rounded-pill px-2 py-2">
              <span class="input-group-text bg-transparent border-0">
                <i class="fa-solid fa-ticket"></i>
              </span>
              <input type="text" name="promocode" value="" class="form-control border-0 bg-transparent shadow-none"
                placeholder="Enter Promocode">
              <button class="btn border-0" onclick="applyPromoCode()">Apply
              </button>
              <label>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- book now -->
<div class="form-check text-center  mt-3">
  <label class="form-check-label " for="promo">
    <input class="form-check-input<?= isset($errors['terms']) ? ' is-invalid' : '' ?>" type="checkbox" id="promo" name="terms" value="1" <?= $termsChecked ? 'checked' : '' ?>>
    By submitting this form, I accept that my information will only be used for the purpose of my reservation
  </label>
  <?php if (isset($errors['terms'])): ?>
    <div class="text-danger small mt-1"><?= htmlspecialchars($errors['terms'], ENT_QUOTES, 'UTF-8') ?></div>
  <?php endif; ?>
</div>
<div class="text-center mt-4">
  <button type="submit" name="booknow" class="btn btn-primary px-5">Book Now</button>
</div>
<!-- How it works -->

<div>
  <h4 class="text-center mt-5">How It Works</h4>
  <p class="text-center">Getting a taxi has never been easier. Follow these simple steps to book your ride in
    minutes.
  </p>
</div>
<section id="featured-services" class="featured-services section">

  <div class="container">

    <div class="row gy-4 d-flex justify-content-center  ">

      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate  " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative  rounded-4">
          <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
          <h4><a href="" class="stretched-link">Enter your pickup & drop location</a></h4>
          <p>Tell us where you are and where you need to go</p>
        </div>
      </div><!-- End Service Item -->


      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative rounded-4">
          <div class="icon"><i class="fa-solid fa-car"></i></div>
          <h4><a href="" class="stretched-link">Choose your ride type</a></h4>
          <p>Select from our range of comfortable vehicles</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative rounded-4">
          <div class="icon"><i class="fa-regular fa-circle-check"></i></div>
          <h4><a href="" class="stretched-link">Confirm your booking</a></h4>
          <p>Sit back and enjoy a safe, comfortable ride</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>
</section>


<!-- Choose Your Ride  -->

<section class="ride-section py-5">
  <div class="container">

    <div class="text-center mb-5">
      <h4>Choose Your Ride</h4>
      <p class="text-muted">Select the perfect vehicle for your journey.</p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- Mini -->
      <div class="col-xl-3 col-md-6">
        <div class="card ride-card text-center h-100 border-0 shadow-sm">

          <div class="card-body">

            <div class="ride-icon display-5 mb-2">🚗</div>

            <h5 class="card-title">Mini</h5>
            <p class="text-muted small">Affordable rides for everyday travel</p>

            <div class="d-flex justify-content-between small px-2">
              <span>Starting from</span>
              <span>$2.50/km</span>
            </div>

            <div class="d-flex justify-content-between small px-2">
              <span>Capacity</span>
              <span>3 passengers</span>
            </div>

            <a href="booknow.php" class="btn btn-primary mt-4 px-4">
              Select Mini
            </a>

          </div>

        </div>
      </div>

      <!-- Sedan -->
      <div class="col-xl-3 col-md-6">
        <div class="card ride-card text-center h-100 border-0 shadow-sm">

          <div class="card-body">

            <div class="ride-icon display-5 mb-2">🚙</div>

            <h5 class="card-title">Sedan</h5>
            <p class="text-muted small">Comfortable sedans for a smooth ride</p>

            <div class="d-flex justify-content-between small px-2">
              <span>Starting from</span>
              <span>$3.50/km</span>
            </div>

            <div class="d-flex justify-content-between small px-2">
              <span>Capacity</span>
              <span>4 passengers</span>
            </div>

            <a href="booknow.php" class="btn btn-primary mt-4 px-4">
              Select Sedan
            </a>

          </div>

        </div>
      </div>

      <!-- SUV -->
      <div class="col-xl-3 col-md-6">
        <div class="card ride-card text-center h-100 border-0 shadow-sm">

          <div class="card-body">

            <div class="ride-icon display-5 mb-2">🚐</div>

            <h5 class="card-title">SUV</h5>
            <p class="text-muted small">Spacious SUVs for group travel</p>

            <div class="d-flex justify-content-between small px-2">
              <span>Starting from</span>
              <span>$5.00/km</span>
            </div>

            <div class="d-flex justify-content-between small px-2">
              <span>Capacity</span>
              <span>6 passengers</span>
            </div>

            <a href="booknow.php" class="btn btn-primary mt-4 px-4">
              Select SUV
            </a>

          </div>

        </div>
      </div>

      <!-- Luxury -->
      <div class="col-xl-3 col-md-6">
        <div class="card ride-card text-center h-100 border-0 shadow-sm">

          <div class="card-body">

            <div class="ride-icon display-5 mb-2">🚘</div>

            <h5 class="card-title">Luxury</h5>
            <p class="text-muted small">Premium vehicles for a luxurious experience</p>

            <div class="d-flex justify-content-between small px-2">
              <span>Starting from</span>
              <span>$8.00/km</span>
            </div>

            <div class="d-flex justify-content-between small px-2">
              <span>Capacity</span>
              <span>5 passengers</span>
            </div>

            <a href="booknow.php" class="btn btn-primary mt-4 px-4">
              Select Luxury
            </a>

          </div>

        </div>
      </div>
    </div>

  </div>
</section>


<!-- Why Choose QuickRide -->

<div>
  <h4 class="text-center mt-5">Why Choose QuickRide</h4>
  <p class="text-center">Your trusted local ride partner with a commitment to quality service</p>
</div>
<section id="stats" class="stats section">

  <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-people"></i>
        <div class="stats-item">
          <h6>local driver</h6>
          <p>Friendly, verified drivers who know your city inside out</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-clock"></i>
        <div class="stats-item">
          <h6>24/7 Support</h6>
          <p>24/7 customer support for your peace of mind.</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-currency-dollar"></i>
        <div class="stats-item">
          <h6>Transparent Pricing</h6>
          <p>No hidden fees, see exact fare before you book</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
        <i class="bi bi-shield"></i>
        <div class="stats-item">
          <h6>Safe Rides</h6>
          <p>GPS tracking and verified drivers for your safety</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section>



<!--What Our Customers Say  -->
<div>
  <h4 class="text-center mt-5">What Our Customers Say</h4>
  <p class="text-center">Don't just take our word for it - hear from our satisfied riders</p>
</div>
<section id="featured-services" class="featured-services section">

  <div class="container">

    <div class="row gy-4 d-flex justify-content-center  ">

      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate  " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative  rounded-4">
          <div class="stars text-warning mb-2">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
              class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>

          <p>Best taxi service in our city! Drivers are always on time and very professional. I use it daily for my
            office commute.</p>
          <br>
          <div class="d-flex align-items-center">

            <img src="assets\img\clients\1 (1).png" class="rounded-circle me-3" width="60" height="60" alt="user">

            <div>
              <h6 class="mb-0 fw-semibold">Sarah Johnson</h6>
              <small class="text-muted">Regular Commuter</small>
            </div>

          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate  " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative  rounded-4">
          <div class="stars text-warning mb-2">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
              class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>

          <p>Transparent pricing and reliable service. I appreciate that they know all the shortcuts in the city.
            Highly recommended!</p>
          <br>
          <div class="d-flex align-items-center">

            <img src="assets\img\clients\2.png" class="rounded-circle me-3" width="60" height="60" alt="user">

            <div>
              <h6 class="mb-0 fw-semibold">Michael Chen</h6>
              <small class="text-muted">Business Traveler</small>
            </div>

          </div>
        </div>
      </div><!-- End Service Item -->



      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate  " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative  rounded-4">
          <div class="stars text-warning mb-2">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
              class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>

          <p>Clean cars, friendly drivers, and affordable rates. QuickRide has become my go-to taxi service for all
            my
            trips around town.</p>
          <br>
          <div class="d-flex align-items-center">

            <img src="assets\img\clients\3.png" class="rounded-circle me-3" width="60" height="60" alt="user">

            <div>
              <h6 class="mb-0 fw-semibold">Emily Rodriguez</h6>
              <small class="text-muted">Local Resident</small>
            </div>

          </div>
        </div>
      </div><!-- End Service Item -->


      <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate  " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative  rounded-4">
          <div class="stars text-warning mb-2">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
              class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>

          <p>Best taxi service in our city! Drivers are always on time and very professional. I use it daily for my
            office commute.</p>
          <br>
          <div class="d-flex align-items-center">

            <img src="assets\img\clients\1 (1).png" class="rounded-circle me-3" width="60" height="60" alt="user">

            <div>
              <h6 class="mb-0 fw-semibold">Sarah Johnson</h6>
              <small class="text-muted">Regular Commuter</small>
            </div>

          </div>
        </div>
      </div><!-- End Service Item -->
    </div>
</section>

</div>
</form>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const transportRadio = document.getElementById('request_transportation');
    const deliveryRadio = document.getElementById('request_delivery');
    const deliveryFields = document.getElementById('deliveryFields');
    const dropoffNameInput = document.querySelector('input[name="dropoff_name"]');
    const dropoffPhoneInput = document.querySelector('input[name="dropoff_phone"]');

    if (!transportRadio || !deliveryRadio || !deliveryFields) return;

    function updateDeliveryFields() {
      const isDelivery = deliveryRadio.checked;
      deliveryFields.style.display = isDelivery ? '' : 'none';

      if (dropoffNameInput) dropoffNameInput.required = isDelivery;
      if (dropoffPhoneInput) dropoffPhoneInput.required = isDelivery;
    }

    transportRadio.addEventListener('change', updateDeliveryFields);
    deliveryRadio.addEventListener('change', updateDeliveryFields);
    updateDeliveryFields();
  });
</script>
<?php include('./partials/footer.php') ?>

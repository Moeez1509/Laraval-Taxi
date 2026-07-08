<?php
require_once __DIR__ . '/partials/header.php';
?>
<br>
<br>
<br>
<br>
<div class="container mt-4">

  <!-- TOP TABS -->
  <div class="d-flex justify-content-center gap-3 mb-4">
    <button class="btn rounded-pill px-4 text-white" style="background:#e0b76d;">
      MANAGE ACCOUNT
    </button>
    <button class="btn rounded-pill px-4 bg-light">
      ACCOUNT HISTORY
    </button>
  </div>

  <div class="row">

    <!-- LEFT SIDE (STATS) -->
    <div class="col-md-6">

      <div class="row g-3">

        <div class="col-6">
          <div class="card p-3 text-white" style="background:#5fb3a3;">
            <h5>$ 0.00</h5>
            <small>Current Balance</small>
          </div>
        </div>

        <div class="col-6">
          <div class="card p-3">
            <h5>$ 0.00</h5>
            <small>Total Earning</small>
          </div>
        </div>

        <div class="col-6">
          <div class="card p-3">
            <h5>$ 0.00</h5>
            <small>Revenue</small>
          </div>
        </div>

        <div class="col-6">
          <div class="card p-3 text-white" style="background:#5fb3a3;">
            <h5>$ 0.00</h5>
            <small>Total Withdrawal</small>
          </div>
        </div>

        <div class="col-12 text-center">
          <div class="card p-4 text-white mx-auto" style="background:#6c98c9; max-width:300px;">
            <h5>$ 0.00</h5>
            <small>Pending Withdrawal</small>
          </div>
        </div>

        <div class="col-12 text-center mt-3">
          <button class="btn text-white px-4" style="background:#5fb3a3;">
            Withdraw Amount
          </button>
        </div>

      </div>
    </div>

    <!-- RIGHT SIDE (BANK FORM) -->
    <div class="col-md-6">

      <div class="card p-4 shadow-sm">

        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="mb-0">Bank Account</h4>
          <button class="btn btn-sm text-white" style="background:#e0b76d;">Edit</button>
        </div>

        <div class="alert alert-info">
          Your account is under verification
        </div>

        <div class="row g-3">

          <div class="col-md-6">
            <label>Account Title</label>
            <input type="text" class="form-control rounded-pill" placeholder="Account Title">
          </div>

          <div class="col-md-6">
            <label>Transit Number</label>
            <input type="text" class="form-control rounded-pill" placeholder="12345">
          </div>

          <div class="col-md-6">
            <label>Institution Number</label>
            <input type="text" class="form-control rounded-pill" placeholder="678">
          </div>

          <div class="col-md-6">
            <label>Account Number</label>
            <input type="text" class="form-control rounded-pill" placeholder="01234567">
          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<?php include('./partials/footer.php') ?>
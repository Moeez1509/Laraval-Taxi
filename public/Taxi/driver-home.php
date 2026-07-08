<?php
include('./config/connect.php');
include('./partials/header.php');
?>
<br><br>
<br><br>
<div class="container mt-4">
  
  <!-- FILTER -->
  <div class="mb-4">
    <select class="form-select w-auto rounded-pill px-4">
      <option>Today</option>
      <option>This Week</option>
      <option>This Month</option>
    </select>
  </div>
  
    <!-- TITLE -->
  <h4 class="mb-4 text-secondary">Financial Summary</h4>

  <!-- CARDS -->
  <div class="row g-4">

    <!-- CARD -->
    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">$28.39</h3>
        <p class="fw-semibold mb-0">Revenue</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">$28.39</h3>
        <p class="fw-semibold mb-0">Total Ride Amount</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">$13.39</h3>
        <p class="fw-semibold mb-0">Total Provider Amount</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">$0.00</h3>
        <p class="fw-semibold mb-0">Tip Amount</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">$0.00</h3>
        <p class="fw-semibold mb-0">Cancellation Charges</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">$0.00</h3>
        <p class="fw-semibold mb-0">Job Cancellation Amount</p>
      </div>
    </div>

  </div>

  <!-- NEXT SECTION -->
  <h4 class="mt-5 text-secondary">Jobs Summary</h4>
   <div class="row g-4">

    <!-- CARD -->
    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">4</h3>
        <p class="fw-semibold mb-0">Job Offered</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">4</h3>
        <p class="fw-semibold mb-0">Job Accepted</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">3</h3>
        <p class="fw-semibold mb-0">Job Rejected</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">0</h3>
        <p class="fw-semibold mb-0">Cancelled Job</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">3</h3>
        <p class="fw-semibold mb-0">Completed Jobs</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">75%</h3>
        <p class="fw-semibold mb-0">Acceptance Rate</p>
      </div>
    </div>
     
    <div class="col-md-3 col-sm-6">
      <div class="card p-4 shadow-sm border-0 rounded-4">
        <h3 class="text-muted">0</h3>
        <p class="fw-semibold mb-0">Scheduled Jobs</p>
      </div>
    </div>
  </div>


</div>
<br>
<?php include('./partials/footer.php') ?>

<?php include __DIR__ . '/partials/header.php'; ?>
<?php 
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['completed', 'cancelled' ,'upcoming']) ? $_GET['tab'] : 'completed'; ?>
<br>

<div class="container my-4">

  <!-- Header -->
  <h4 class="mb-3">History and Statements</h4>

  <!-- Tabs + Actions -->
  <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
    
     <!-- Tabs -->
  <div class="d-flex gap-2 mb-4">
  <a href="?tab=completed" class="btn rounded-pill <?= $currentTab=='completed' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Completed
  </a>

  <a href="?tab=cancelled" class="btn rounded-pill <?= $currentTab=='cancelled' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Cancelled
  </a>

  <a href="?tab=upcoming" class="btn rounded-pill <?= $currentTab=='upcoming' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Upcomping Jobs
  </a>
</div>

    <div class="d-flex gap-2">
      <button class="btn btn-light border">CSV</button>
      <button class="btn btn-light border">Excel</button>
      <button class="btn btn-light border">Pdf</button>

      <select class="form-select w-auto">
        <option>Today</option>
        <option>This Week</option>
        <option>This Month</option>
      </select>
    </div>

  </div>
  <?php if($currentTab == 'completed'): ?>

  <!-- Financial Summary -->
  <h5 class="mb-3">Financial Summary</h5>
  <div class="row g-3 mb-4">
    
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Total Ride Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Total Provider Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Tip Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

  </div>

  <!-- Jobs Summary -->
  <h5 class="mb-3">Jobs Summary</h5>
  <div class="row g-3 mb-4">

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Job Offered</small>
        <h3>0</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Jobs Accepted</small>
        <h3>0</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Completed Jobs</small>
        <h3>0</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>ACCEPTANCE RATE</small>
        <h3>0%</h3>
      </div>
    </div>

  </div>

  <!-- Table Controls -->
  <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap gap-2">
    <select class="form-select w-auto">
      <option>10</option>
      <option>25</option>
    </select>

    <input type="text" class="form-control w-25" placeholder="Search">
  </div>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Booking ID</th>
          <th>User Name</th>
          <th>Provider Name</th>
          <th>Date & Time</th>
          <th>Amount</th>
          <th>Payment Mode</th>
          <th>Payment Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td colspan="9" class="text-center">No matching records found</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
    <small>No records available</small>

    <div>
      <button class="btn btn-light border btn-sm">Previous</button>
      <button class="btn btn-light border btn-sm">Next</button>
    </div>
  </div>

</div>
<?php elseif($currentTab == 'cancelled'): ?>
     <!-- Financial Summary -->
  <h5 class="mb-3">Financial Summary</h5>
  <div class="row g-3 mb-4">
    
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Total Ride Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Total Provider Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Cancellation Charges</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Job Cancellation Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>
  </div>

  <!-- Jobs Summary -->
  <h5 class="mb-3">Jobs Summary</h5>
  <div class="row g-3 mb-4">

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Job Offered</small>
        <h3>0</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Jobs Accepted</small>
        <h3>0</h3>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Jobs Rejected</small>
        <h3>0</h3>
      </div>
    </div>
     
    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Cancelled Jobs</small>
        <h3>0</h3>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>ACCEPTANCE RATE</small>
        <h3>0%</h3>
      </div>
    </div>

  </div>

  <!-- Table Controls -->
  <div class="d-flex justify-content-between align-items-center mb-2 flex-wrap gap-2">
    <select class="form-select w-auto">
      <option>10</option>
      <option>25</option>
    </select>

    <input type="text" class="form-control w-25" placeholder="Search">
  </div>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Booking ID</th>
          <th>User Name</th>
          <th>Provider Name</th>
          <th>Date & Time</th>
          <th>Amount</th>
          <th>Payment Mode</th>
          <th>Payment Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td colspan="9" class="text-center">No matching records found</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
    <small>No records available</small>

    <div>
      <button class="btn btn-light border btn-sm">Previous</button>
      <button class="btn btn-light border btn-sm">Next</button>
    </div>
  </div>

</div>

<?php elseif($currentTab == 'upcoming'): ?>
     <!-- Financial Summary -->
  <h5 class="mb-3">Financial Summary</h5>
  <div class="row g-3 mb-4">
    
    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Total Ride Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card p-3 shadow-sm">
        <small>Total Provider Amount</small>
        <h3>$ 0.00</h3>
      </div>
    </div>
  <!-- Jobs Summary -->
  <h5 class="mb-3">Jobs Summary</h5>
  <div class="row g-3 mb-4">

    <div class="col-md-3">
      <div class="card p-3 shadow-sm">
        <small>Job Offered</small>
        <h3>0</h3>
      </div>
    </div>

  <!-- Table -->
  <div class="table-responsive">
    <table class="table align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Booking ID</th>
          <th>User Name</th>
          <th>Provider Name</th>
          <th>Date & Time</th>
          <th>Amount</th>
          <th>Payment Mode</th>
          <th>Payment Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td colspan="9" class="text-center">No matching records found</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <div class="d-flex justify-content-between align-items-center mt-3 flex-wrap gap-2">
    <small>No records available</small>

    <div>
      <button class="btn btn-light border btn-sm">Previous</button>
      <button class="btn btn-light border btn-sm">Next</button>
    </div>
  </div>

</div>


<?php endif; ?>
<?php include __DIR__ . '/partials/footer.php'; ?>
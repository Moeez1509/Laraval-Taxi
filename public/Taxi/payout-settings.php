<?php
include('./partials/header.php');
?>
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['payout', 'history']) ? $_GET['tab'] : 'payout';
?>
<br>
<br>
<br>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="d-flex justify-content-center mb-4">
                <div class="bg-white rounded-pill shadow-sm p-1 d-inline-flex gap-1">
                    <a href="?tab=payout"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'payout' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'payout' ? '#435ee6' : 'transparent'; ?>;">
                        Manage Account
                    </a>

                    <a href="?tab=history"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'history' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'history' ? '#435ee6' : 'transparent'; ?>;">
                        Account History
                    </a>
                </div>
            </div>

            <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5">

                <?php if ($currentTab === 'payout'): ?>

<div class="container mt-4">


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

        </div>

      </div>

    </div>

  </div>

</div>

                <?php else: ?>
                   

                    <form action="save-card.php" method="POST">
                       
                    <div class="table table-responsive">
                        <table class="table align-middle text-center mb-0">
                            <thead>
                                <tr class="table-light">
                                    <th class="py-3 fw-semibold text-secondary">Account Title</th>
                                    <th class="py-3 fw-semibold text-secondary">Date & Time</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td>John Doe</td>
                                    <td>2024-06-01 10:00 AM</td>
                                </tr>

                                <tr>
                                    <td>John Doe</td>
                                    <td>2024-06-01 10:00 AM</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    </form>

                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php include('./partials/footer.php') ?>
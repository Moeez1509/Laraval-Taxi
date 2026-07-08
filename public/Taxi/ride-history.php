<?php include('./config/connect.php') ?>
<?php include('./partials/header.php') ?>

<!-- RIGHT SIDE (FORM) -->
 <br><br><br>
 
 <div class="container my-5 d-flex justify-content-center">
        <div class="col-md-12" >
        <div class="card p-4 shadow-lg mx-auto" >
            <h3 class="mb-3 text-center ">Ride History</h3>

            <form action="" method="post">
       
                <table class="table table-hover">
  <thead>
    <tr>
        <th>Booking ID</th>
      <th>Date</th>
      <th>Name</th>
      <th>Status</th>
      <th>Fare</th>
      <th>Type</th>
      <th>Payment</th>
    </tr>
  </thead> 
  <tbody>
     <!-- Sample data, replace with dynamic content -->
    <tr>
        <td>12345</td>
        <td>2024-06-01 10:00 AM</td>
        <td>John Doe</td>
        <td>Pending</td>
        <td>$25.00</td>
        <td>Transportation</td>
        <td>Card</td>
    </tr>

  </tbody>
</table>
            </form>
        </div>
    </div>
</div>
<?php include('./partials/footer.php') ?>
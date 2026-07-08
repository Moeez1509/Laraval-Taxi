@extends('maindesign')
@section('coupons')
<!-- RIGHT SIDE (FORM) -->
 <br><br><br>

 <div class="container my-5 d-flex justify-content-center">
        <div class="col-md-12" >
        <div class="card p-4 shadow-lg mx-auto" >
            <h3 class="mb-3 text-center ">Coupons</h3>

            <form action="" method="post">

                <table class="table table-hover">
  <thead>
    <tr>
        <th>Coupon Code</th>
      <th>Description</th>
      <th>Discount</th>
      <th>Expiry Date</th>
    </tr>
  </thead>
  <tbody>
     <!-- Sample data, replace with dynamic content -->
    <tr>
        <td>SAVE20</td>
        <td>Get 20% off on your next ride</td>
        <td>20%</td>
        <td>2024-12-31</td>
    </tr>
    <!-- Add more rows as needed -->
  </tbody>
</table>
            </form>
        </div>
    </div>
</div>
@endsection('coupons')

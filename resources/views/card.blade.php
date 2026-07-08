@extends('maindesign')
@section('card')
<!-- RIGHT SIDE (FORM) -->
 <br><br><br>

 <div class="container my-5 d-flex justify-content-center">
        <div class="col-md-12" >
        <div class="card p-4 shadow-lg mx-auto" >
            <h3 class="mb-3 text-center ">Cards</h3>

            <form action="" method="post">

                <table class="table table-hover">
  <thead>
    <tr>
        <th>No.</th>
      <th>Card Number</th>
      <th>Card Type</th>
      <th>Expiry Date</th>
      <th>Default</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
     <!-- Sample data, replace with dynamic content -->
    <tr>
        <td>1</td>
        <td>**** **** **** 4444</td>
        <td>MasterCard</td>
        <td>2024-12-31</td>
        <td><span class="badge bg-success">Yes</span></td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
    </tr>
    <!-- Add more rows as needed -->
  </tbody>
</table>
            </form>
        </div>
    </div>
</div>
@endsection('card')

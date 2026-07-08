@extends('maindesign')
@section('mywallet')
<!-- RIGHT SIDE (FORM) -->
 <br><br><br>

<div class="container mt-4">

  <!-- Error Alert -->
  <div class="alert alert-danger">
    <strong>Error!</strong>
    <ul class="mb-0">
      <li>Amount is required.</li>
    </ul>
  </div>

  <h4 class="mb-4">My Wallet</h4>

  <div class="row align-items-center">

    <!-- LEFT SIDE (BALANCE) -->
    <div class="col-md-6 text-center">
      <h1 class="display-1 fw-light">$ 26570.60</h1>
      <p class="text-muted">in your wallet</p>
    </div>

    <!-- RIGHT SIDE (FORM) -->
    <div class="col-md-6">
      <form method="POST">

        <h6 class="mb-3">Add Money</h6>

        <!-- Amount -->
        <div class="mb-3">
          <input type="number" name="amount" class="form-control" placeholder="Enter Amount">
        </div>

        <!-- Card Select -->
        <div class="mb-3">
          <select class="form-select" name="card">
            <option>MasterCard **** **** **** 4444</option>
            <option>Visa **** **** **** 1234</option>
          </select>
        </div>

        <!-- Button -->
        <button class="btn w-100 text-white" style="background-color: #e0b76d;">
          Add Money
        </button>

      </form>
    </div>

  </div>

</div>
@endsection('mywallet')

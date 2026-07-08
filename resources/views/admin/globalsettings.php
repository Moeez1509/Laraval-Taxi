<?php include __DIR__ . '/partials/header.php'; ?>



<div class="container my-4">
  <div class="row g-3">

    <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">
        
        <div class="d-flex justify-content-between  align-items-center p-3">
          <span>📅 Schedule Booking Settings</span>
          <button class="btn btn-light toggle-btn"
          data-bs-toggle="collapse"
          data-bs-target="#box1">+</button>
        </div>
        
        <div id="box1" class="collapse">
          <div class="p-3 border-top">
            
            <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Schedule Booking</span>
          <div class="form-check form-switch">
            <input  class="form-check-input main-toggle"  type="checkbox" checked>
          </div>
        </div>
         <div class="child-options">
       
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Force Scheduling Job</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox">
          </div>
        </div>

        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Minimum Advance Booking Time</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Maximun Advance Booking Days</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Enable Schedule Notification Time</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Enable Schedule Start Time </span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Show Schedule Start Time </span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Show Pending Scheduled Count-Passenger</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Show Pending Scheduled Bookings Count – Provider</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Show Pending Scheduled Count-Passenger</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
          <span>Show Pending Scheduled Count-Passenger</span>
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" checked>
          </div>
        </div>
        
        
<hr>

        <div class="container my-4">
  <div class="row g-4">

    <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        Schedule Job Notification Time (Mins)
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="30">
    </div>

    <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        Schedule Booking Start Time (Mins)
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="10">
    </div>

    <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        Minimum Advance Booking Time (Minutes)
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="30">
    </div>

    <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        Maximum Advance Booking Days
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="0">
    </div>

  </div>
</div>
</div>
</div>
        </div>
      </div>
    </div>

    <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>👤 Guest Info</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box2">+</button>
        </div>

        <div id="box2" class="collapse">
            <div class="p-3 border-top">
                
       <!-- SECTION -->
<div class="card p-3 mb-3">

  <!-- Main Toggle -->
  <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Guest Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>

  <!-- Child Options -->
  <div class="child-options">

    <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between mb-2">
      <span>Guest Name</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
      </div>
    </div>

    <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Guest Phone</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
    </div>

  </div>

</div>
        </div>
      </div>
    </div>
    </div>

   
    <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>👥 Passenger & Baggage Count Switch</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box3">+</button>
        </div>
        <div id="box3" class="collapse">
            <div class="p-3 border-top">
                
       <!-- SECTION -->
<div class="card p-3 mb-3">

  <!-- Main Toggle -->
  <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Number of Adults</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>

  <!-- Child Options -->
  <div class="child-options">

      <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between mb-2">
        <span>Number of Children</span>
         <div class="form-check form-switch">
        <input type="checkbox" class="form-check-input">
        </div>
      </div>

      <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
        <span>Passenger Baggage Count</span>
         <div class="form-check form-switch">
        <input type="checkbox" class="form-check-input">
      </div>

    </div>
  </div>

</div>
  </div>
      </div>
    </div>
    </div>

    <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>➕ Extra</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box4">+</button>
        </div>

        <div id="box4" class="collapse">
          <div class="p-3 border-top">
            
    <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Delivery Note/Special Note</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
        </div>

      </div>
    </div>

  </div>

 <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>✈️Travel Details</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box5">+</button>
        </div>

        <div id="box5" class="collapse">
          <div class="p-3 border-top">
            
    <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Enable Flight Number</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>💳Payment</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box6">+</button>
        </div>

        <div id="box6" class="collapse">
          <div class="p-3 border-top">
            
    <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Booking Pre-Payment from Card</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Booking Method Only</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Wallet</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Promocodes</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
        </div>

      </div>
    </div>

  </div>

  
  <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>✈️ Ride Booking Types</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box7">+</button>
        </div>

        <div id="box7" class="collapse">
          <div class="p-3 border-top">
            
    <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>On Demand Booking</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Dispatch Booking</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
          <hr>
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Street Hail Booking</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
      <span>Price Negotiation Module</span>
       <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
          </div>
        </div>

      </div>
    </div>

  </div>
  <div class="col-md-6">
  <div class="card">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center p-3">
      <span>👤 Referral System</span>
      <button class="btn btn-light"
              data-bs-toggle="collapse"
              data-bs-target="#box8">+</button>
    </div>

    <div id="box8" class="collapse">
      <div class="p-3 border-top">

        <!-- USER REFERRAL -->
        <div class="section mb-4">
          
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between align-items-center">
            <span>User Referral</span>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input main-toggle">
            </div>
            </div>
          

          <!-- CHILD -->
          <div class="child-options mt-3">
            <label class="fw-semibold">Passenger Reward Enabled</label>
            <input type="text"
                   class="form-control rounded-pill bg-light border-0 mt-2"
                   value="1">
          </div>
        </div>

        <hr>

        <!-- PROVIDER REFERRAL -->
        <div class="section">
          

          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between align-items-center">
            <span>Provider Referral</span>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input main-toggle">
            </div>
          </div>

          <!-- CHILD -->
          <div class="child-options mt-3">
            <label class="fw-semibold">Provider Referral Percentage %</label>
            <input type="text"
                   class="form-control rounded-pill bg-light border-0 mt-2"
                   value="10">
          </div>

        </div>

      </div>
    </div>

  
</div>
</div>
 <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>👤Coustomer Vehicle Info(Road Assitance)</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box9">+</button>
        </div>
        <div id="box9" class="collapse">
            <div class="p-3 border-top">
                
       <!-- SECTION -->
<div class="card p-3 mb-3">

  <!-- Main Toggle -->
  <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Manual vehicle entry</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>
  <hr>

  <!-- Child Options -->
  
      <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between">
        <span>API-based vehicle selection</span>
         <div class="form-check form-switch">
        <input type="checkbox" class="form-check-input">
      </div>

    </div>


</div>
  </div>
      </div>
    </div>
    </div>
   <!-- items -->
  <div class="col-md-6">
  <div class="card">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center p-3">
      <span>👤 Child Seat</span>
      <button class="btn btn-light"
              data-bs-toggle="collapse"
              data-bs-target="#box10">+</button>
    </div>

    <div id="box10" class="collapse">
      <div class="p-3 border-top">

        <!-- USER REFERRAL -->
        <div class="section mb-4">
          
          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between align-items-center">
            <span>Infant Carrier Enabled</span>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input main-toggle">
            </div>
            </div>
          

          <!-- CHILD -->
          <div class="child-options mt-3">
            <label class="fw-semibold">Infant Carrier Description</label>
            <input type="text"
                   class="form-control rounded-pill bg-light border-0 mt-2"
                   placeholder="Up to 10 kg, 6 months">
          </div>
        </div>

        <hr>

        <!-- PROVIDER REFERRAL -->
        <div class="section">
          

          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between align-items-center">
            <span> Convertible Seat Enabled</span>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input main-toggle">
            </div>
          </div>

          <!-- CHILD -->
          <div class="child-options mt-3">
            <label class="fw-semibold">Convertible Seat Description</label>
            <input type="text"
                   class="form-control rounded-pill bg-light border-0 mt-2"
                   placeholder="9–25 kg, 0–7 years">
          </div>

        </div>
      
        <!-- PROVIDER REFERRAL -->
        <div class="section">
          

          <div class="d-flex rounded-pill bg-light py-3 px-4 justify-content-between align-items-center">
            <span>Booster Seat Enabled </span>
            <div class="form-check form-switch">
              <input type="checkbox" class="form-check-input main-toggle">
            </div>
          </div>

          <!-- CHILD -->
          <div class="child-options mt-3">
            <label class="fw-semibold">Booster Seat Description</label>
            <input type="text"
                   class="form-control rounded-pill bg-light border-0 mt-2"
                   placeholder="22–36 kg, 6–12 years">
          </div>

        </div>
      </div>
    </div>

  
</div>
</div>
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>

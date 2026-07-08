
<?php include('partials/header.php');?>
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['category', 'type' ,'setting']) ? $_GET['tab'] : 'category';
$typeTab = isset($_GET['type']) && in_array($_GET['type'], ['transportation', 'delivery' ,'recovery' ,'road']) ? $_GET['type'] : 'transportaion';
?>

<?php function actionDropdown() { ?>
<div class="dropdown">
  <button class="btn btn-primary px-3" data-bs-toggle="dropdown">⋮</button>
  <ul class="dropdown-menu shadow border-0">
    <li><a class="dropdown-item" href="#">Edit</a></li>
    <li><a class="dropdown-item" href="#">Duplicate</a></li>
    <li><a class="dropdown-item text-danger" href="#">Delete</a></li>
  </ul>
</div>
<?php } ?>

<div class="container my-5">
  
  <!-- Tabs -->
  <div class="d-flex gap-2 mb-4">
  <a href="?tab=category" class="btn rounded-pill <?= $currentTab=='category' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Service Categories
  </a>

  <a href="?tab=type" class="btn rounded-pill <?= $currentTab=='type' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Service Types
  </a>

  <a href="?tab=setting" class="btn rounded-pill <?= $currentTab=='setting' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Settings
  </a>
</div>

<div class="card p-4">

<?php if($currentTab == 'category'): ?>

  <!-- CATEGORY UI -->
  <!-- Default Badge -->
    <div class="d-flex mb-4">
  <span class="bg-primary text-white fw-bold rounded-pill d-flex align-items-center justify-content-center"
        style="width: 80px; height: 40px;">
    Default
  </span>
</div>
    <div class="row ">

      <!-- Column 1 -->
      <div class="col-md-3">
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Transportation</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" checked>
          </div>
        </div>
      
        <div class="mb-3 d-flex justify-content-between align-items-center py-2  ">
          <span class="fs-3 fw-semibold">Roadside Assistance</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

      
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Medical and health services</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

      
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Maintenance and repairs</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

       
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Garden maintenance</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>
        </div>

      <!-- Column 2 -->
      <div class="col-md-3">
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Delivery</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" checked>
          </div>
        </div>

       
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Dream Driver</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Education and training</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Construction and renovations</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

       
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Outdoor constructions</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>
        </div>
      <!-- Column 3 -->
      <div class="col-md-3">
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Truck</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Rental</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

      
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Consulting and coaching</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Security</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

     
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Exterior design services</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>
        </div>

      <!-- Column 4 -->
     <div class="col-md-3">
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">OutStation</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Personal Care</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        
        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Cleaning services</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

        <div class="mb-3 d-flex justify-content-between align-items-center py-2 ">
          <span class="fs-3 fw-semibold">Landscaping services</span>
          <div class="form-check form-switch">
            <input class="form-check-input fs-4" type="checkbox" >
          </div>
        </div>

    </div>

    <!-- Submit Button -->
    <div class="text-center mt-4">
      <button class="btn btn-success px-4">SUBMIT</button>
    </div>

  </div>

<?php elseif($currentTab == 'type'): ?>
  <!-- Tabs -->
  <div class="d-flex gap-2 mb-4">
  <a href="?tab=type&type=transportation" class="btn rounded-pill <?= $typeTab=='transportation' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Transportation 
  </a>

  <a href="?tab=type&type=delivery" class="btn rounded-pill <?= $typeTab=='delivery' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Delivery
  </a>

  <a href="?tab=type&type=recovery" class="btn rounded-pill <?= $typeTab=='recovery' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Recovery
  </a>
  
  <a href="?tab=type&type=road" class="btn rounded-pill <?= $typeTab=='road' ? 'btn-primary text-white' : 'btn-outline-primary' ?>">
    Road Assistance
  </a>
</div>

<?php if($typeTab == 'transportation'): ?>


  <!-- SERVICE TYPES TABLE -->
  <!-- ✅ SERVICE TYPES TABLE -->
  <div class="d-flex justify-content-between mb-3">
    <button class="btn btn-success">Add New Service</button>
    <input type="text" class="form-control w-25" placeholder="Search">
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>Service Name</th>
        <th>Service Image</th>
        <th>Map Icon</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Economy</td>
        <td><img src="car.png" width="60"></td>
        <td><img src="map.png" width="30"></td>
        <td class="form-switch"><input type="checkbox" class="form-check-input" checked></td>
        <td><?php actionDropdown(); ?></td>
      </tr>
    </tbody>
  </table>
  <?php elseif($typeTab == 'delivery'): ?>
    <!-- ✅ SERVICE TYPES TABLE -->
  <div class="d-flex justify-content-between mb-3">
    <button class="btn btn-success">Add New Service</button>
    <input type="text" class="form-control w-25" placeholder="Search">
  </div>
  
  <table class="table">
    <thead>
      <tr>
        <th>Service Name</th>
        <th>Service Image</th>
        <th>Map Icon</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bike</td>
        <td><img src="car.png" width="60"></td>
        <td><img src="map.png" width="30"></td>
        <td class="form-switch"><input type="checkbox" class="form-check-input" checked></td>
       <td><?php actionDropdown(); ?></td>
      </tr>
    </tbody>
  </table>
  <?php elseif($typeTab == 'recovery'): ?>
    <!-- ✅ SERVICE TYPES TABLE -->
  <div class="d-flex justify-content-between mb-3">
    <button class="btn btn-success">Add New Service</button>
    <input type="text" class="form-control w-25" placeholder="Search">
  </div>

     <table class="table">
    <thead>
      <tr>
        <th>Service Name</th>
        <th>Service Image</th>
        <th>Map Icon</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Class 4 – Medium-Heavy Duty</td>
        <td><img src="car.png" width="60"></td>
        <td><img src="map.png" width="30"></td>
        <td class="form-switch"><input type="checkbox" class="form-check-input" checked></td>
        <td><?php actionDropdown(); ?></td>
      </tr>
    </tbody>
  </table>

  <?php elseif($typeTab == 'road'): ?>
    <!-- ✅ SERVICE TYPES TABLE -->
  <div class="d-flex justify-content-between mb-3">
    <button class="btn btn-success">Add New Service</button>
    <input type="text" class="form-control w-25" placeholder="Search">
  </div>


   <table class="table">
    <thead>
      <tr>
        <th>Service Name</th>
        <th>Service Image</th>
        <th>Map Icon</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Battery Jump Start</td>
        <td><img src="car.png" width="60"></td>
        <td><img src="map.png" width="30"></td>
        <td class="form-switch"><input type="checkbox" class="form-check-input" checked></td>
        <td><?php actionDropdown(); ?></td>
      </tr>
    </tbody>
  </table>

    <?php endif; ?>



<?php elseif($currentTab == 'setting'): ?>

  <!-- SETTINGS UI -->
    <!-- ✅ SETTINGS -->
  <div class="row">

    <div class="col-md-3 d-flex justify-content-between align-items-center mb-4">
      <span class="fs-3 fw-semibold">hide_id</span>
      <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input">
    </div>
    </div>

    <div class="col-md-3 d-flex justify-content-between align-items-center mb-4">
      <span class="fs-3 fw-semibold">hide_base_price</span>
      <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input" checked>
    </div>
    </div>

    <div class="col-md-3 d-flex justify-content-between align-items-center mb-4">
      <span class="fs-3 fw-semibold">hide_capacity</span>
      <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input" checked>
    </div>
    </div>

    <div class="col-md-3 d-flex justify-content-between align-items-center mb-4">
     <span class="fs-3 fw-semibold">hide_pricing_logic</span>
     <div class="form-check form-switch">
     <input type="checkbox" class="form-check-input" checked>
   </div>
   </div>
  </div>
  <div class="row ">
     <div class="col-md-3 d-flex justify-content-between align-items-center mb-4">
      <span class="fs-3 fw-semibold">hide_approved_providers</span>
      <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input" checked>
    </div>
    </div>

 <div class="col-md-3 d-flex justify-content-between align-items-center mb-4">
      <span class="fs-3 fw-semibold">hide_active_providers</span>
      <div class="form-check form-switch">
      <input type="checkbox" class="form-check-input" checked>
    </div>
    </div>

  </div>

  <div class="text-center">
    <button class="btn btn-success">SUBMIT</button>
  </div>

<?php endif; ?>

</div>

<?php include('partials/footer.php');
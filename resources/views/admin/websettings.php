<?php include __DIR__ . '/partials/header.php'; ?>
<?php
$timezones = DateTimeZone::listIdentifiers();
?>



<div class="container my-4">
  <div class="row g-3">

    <!-- ITEM -->
    <div class="col-md-6">
      <div class="card">

        <div class="d-flex justify-content-between align-items-center p-3">
          <span>🕒 Timezones</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box1">+</button>
        </div>

        <div id="box1" class="collapse">
          <div class="p-3 border-top">
         
        <div class="container my-4">
  <div class="row g-4">

    <!-- Field -->
    <div class="col-md-6">
              <p>Set Timezone</p>
             <select name="timezone" class="form-control rounded-pill px-4 bg-light border-0">
  <?php
  foreach ($timezones as $tz) {
      $date = new DateTime("now", new DateTimeZone($tz));
      $offset = $date->format('P'); // +05:00

      echo "<option value='$tz'>(GMT$offset) $tz</option>";
  }
  ?>
</select>
    </div>

    <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        Time Hour Format
      </label>
      <select name="timezone" class="form-control rounded-pill px-4 bg-light border-0">
        <option value="">12</option>
        <option value="">24</option>
      </select>
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
          <span>🖌 Front End</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box2">+</button>
        </div>

        <div id="box2" class="collapse">
            <div class="p-3 border-top">
              <div class="container my-4">
  <div class="row g-4">

    <!-- Field -->
    <div class="col-md-6">
             <label class="form-label fw-semibold">
        Home Page Paragraph
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="Index">
         
    </div>

    <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        Miles Driven
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="1000">
    </div>
       <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
        People Dropped
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="20000">
    </div>
       <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Taxis & Providers
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="100">
    </div>
       <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Happy People
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="500">
    </div>
       <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Youtube Link
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="https://youtu.be/kQsE5LonCIA?si=U53Fu7E7JbBKIad_">
    </div>
       <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Site copyright
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="Meemcolart">
    </div>
       <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Site Copyright Url
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="https://dev.iyeo.online/">
    </div>
      <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Site Email
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="meemcolart@gmail.com">
    </div>
      <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Theme
      </label>
      <select name="Default"  class="form-control rounded-pill py-3 px-4 bg-light border-0" style="height: 60px;">
            <option value="">Default</option>
            <option value="">Theme 1(Conexi)</option>
            </select>
    </div>
      <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Website Language - Default
      </label>
      <select name="Default"  class="form-control rounded-pill py-3 px-4 bg-light border-0" style="height: 60px;">
             <option>English</option>
  <option>Spanish</option>
  <option>French</option>
  <option>Polish</option>
  <option>Finnish</option>
  <option>Swedish</option>
  <option>Catalan</option>
  <option>Arabic</option>
  <option>Romanian</option>
            </select>
    </div>
      <!-- Field -->
    <div class="col-md-6">
      <label class="form-label fw-semibold">
      Color
      </label>
      <select name="Default"  class="form-control rounded-pill py-3 px-4 bg-light border-0" style="height: 60px;">
         <option>Default</option>
  <option>Blue</option>
  <option>Red</option>
  <option>Green</option>
  <option>Orange</option>
  <option>Black</option>
  <option>Purple</option>
  <option>Gold</option>
  <option>Silver</option>
  <option>Pink</option>
  <option >Turquoise</option>
  <option>Cyan</option>
  <option>Lime Green</option>
  <option>Violet</option>
  <option>Brown</option>
      </select>
    </div>

    <div class="d-flex justify-content-between rounded-pill py-3 px-4 bg-light align-items-center mb-3">
    <span>Show Preset Credentials</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input " checked>
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
          <span>👥 Modules</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box3">+</button>
        </div>
        <div id="box3" class="collapse">
            <div class="p-3 border-top">
                
       <!-- SECTION -->
<div class="card p-3 mb-3">

              <div class="container my-4">
  <div class="row g-4">

    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Accountant Panel</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>

     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>About us Page</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Blogs Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Call Us Button On Header</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Call to action - container</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Contact info - container</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Force Login Page on Web</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Fleet Panel</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>FAQ Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Features Section</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Hide Conexi Code</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Home Page Button</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Job Button</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Login on Web</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Login Phone Field in Login Page</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Landing Page</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Multi-language</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Download Application Section</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Offers Section</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Trust Section</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Offers - container</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Provider on Web</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Register on Web</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Slider Section</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Services - container</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Guest Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Website</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Admin Login Otp</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Provider Contract Sign</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>History Download</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Guest Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Applications Link Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Guest Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Guest Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Phone on header</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle">
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Ride svc sign in detail</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Vehicle Fields Enabled</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Play Bell</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Booking Request Count</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Providers Count</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Users Count</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Support Requests Count</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Website Reviews</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Become Provider Section</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Tag Pixel Enable</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Show Header Marquee</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-12">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Contact Email Details</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" checked>
  </div>
  </div>     
    </div>

     <!-- Field -->
    <div class="col-md-12">
      <label class="form-label fw-semibold">
      Contact Details Email
      </label>
      <input type="text" class="form-control rounded-pill py-3 px-4 bg-light border-0"
             value="moeezintasar@gmail.com">
    </div>
     <!-- Field -->
    <div class="col-md-12">
      <label class="form-label fw-semibold">
      History Download Style
      </label>
      <select class="form-control rounded-pill py-3 px-4 bg-light border-0" style="height: 60px;"
             >
            <option value="">Invoice Style</option>
            <option value="">Log Style</option>
            </select>
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
          <span>%Tax Info</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box4">+</button>
        </div>

        <div id="box4" class="collapse">
          <div class="p-3 border-top">
             <div class="container my-4">
  <div class="row g-4">
            
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Number TPS - Tax Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Number TVQ - Tax Info</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
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
          <span>👤 Passenger Website</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box5">+</button>
        </div>

        <div id="box5" class="collapse">
          <div class="p-3 border-top">
            
    <div class="container my-4">
  <div class="row g-4">
            
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Dashboard</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>My Profile</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>History</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Upcoming Jobs</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Coupons</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>My Wallet</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Cards</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Manage Account</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Donate Us</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
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
          <span>☰Admin Menu Switches</span>
          <button class="btn btn-light toggle-btn"
                  data-bs-toggle="collapse"
                  data-bs-target="#box6">+</button>
        </div>

        <div id="box6" class="collapse">
          <div class="p-3 border-top">
            <div class="container my-4">
  <div class="row g-4">
            
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Dispatcher Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Booking Requests Form Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Eagle Eye Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>SOS_Alerts_switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Push Notifications Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Reviews Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Cancellations Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Contact Enquiries Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Country View Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Users Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Providers Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Referal_&_Earnings_switch
</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Monitoring_Driver_switch
</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Services Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Subscription(s)_switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>History and Statements Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Complaints_&_Support_switch
</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>CMS Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Website CMS Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>App CMS Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Web & Admin Language Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Administration Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
     <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>User Roles Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Activity Logs Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Truncate Data Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Account Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Account Settings Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Change Password Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Bank Accounts Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Accounts_switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Withdrawal_switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>Payment Settings Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>
    <!-- Field -->
     <div class="col-lg-6">
    <div class="d-flex justify-content-between rounded-pill bg-light py-3 px-4 align-items-center mb-3">
    <span>App Settings Switch</span>
     <div class="form-check form-switch">
    <input type="checkbox" class="form-check-input main-toggle" >
  </div>
  </div>     
    </div>


    </div>
    </div>
        
        </div>

      </div>
    </div>

  </div>

  
  
</div>
<?php include __DIR__ . '/partials/footer.php'; ?>

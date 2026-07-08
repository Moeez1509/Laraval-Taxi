<?php
include('./partials/header.php');
?>
<?php
$currentTab = isset($_GET['tab']) && in_array($_GET['tab'], ['profile', 'password']) ? $_GET['tab'] : 'profile';
?>
<br>
<br>
<br>


<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">

            <div class="d-flex justify-content-center mb-4">
                <div class="bg-white rounded-pill shadow-sm p-1 d-inline-flex gap-1">
                    <a href="?tab=profile"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'profile' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'profile' ? '#435ee6' : 'transparent'; ?>;">
                        Profile
                    </a>

                    <a href="?tab=password"
                        class="btn rounded-pill px-4 py-2 fw-medium <?php echo $currentTab === 'password' ? 'text-white' : 'text-dark'; ?>"
                        style="background-color: <?php echo $currentTab === 'password' ? '#435ee6' : 'transparent'; ?>;">
                        Change Password
                    </a>
                </div>
            </div>

            <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5">

                <?php if ($currentTab === 'profile'): ?>
            <!-- Main Card -->
  

                
                <!-- Profile Upload Section -->
<div class="text-center mb-5">
    <label class="d-inline-block">
        <input type="file" class="d-none" accept="image/*">

        <div class="bg-light rounded-4 d-flex flex-column justify-content-center align-items-center mx-auto"
             style="width: 160px; height: 160px; cursor: pointer;">

            <i class="fa-solid fa-cloud-arrow-up fs-1 text-secondary mb-3"></i>

            <p class="mb-1 text-secondary small">
                Drag and Drop a file
            </p>

            <p class="mb-0 text-secondary small">
                here or click
            </p>

        </div>
    </label>
</div>

                <!-- Row 1 -->
                <div class="row g-4 mb-5">
                  <div class="col-md-4">
                     <label class="form-label fw-semibold">First Name</label>
            <div class="input-group bg-light rounded-pill px-2 py-2">
               
              <input type="text" name="first_name" value=""
                class="form-control border-0 bg-transparent shadow-none" placeholder="Harry" required>

            </div>
          </div>

                     <div class="col-md-4">
                     <label class="form-label fw-semibold">Last Name</label>
            <div class="input-group bg-light rounded-pill px-2 py-2">
               
              <input type="text" name="last_name" value=""
                class="form-control border-0 bg-transparent shadow-none" placeholder="Potter" required>

            </div>
          </div>
                    <div class="col-md-4">
                     <label class="form-label fw-semibold">Phone</label>
            <div class="input-group bg-light rounded-pill px-2 py-2">
               
              <input type="text" name="phone" value=""
                class="form-control border-0 bg-transparent shadow-none" placeholder="+92 11 22334455" required>

            </div>
          </div>

                <hr class="mb-5">

                <!-- Row 2 -->
                <div class="row g-4 mb-5">
                    <div class="col-md-4">
                     <label class="form-label fw-semibold"> Email</label>
            <div class="input-group bg-light rounded-pill px-2 py-2">
               
              <input type="text" name="email" value=""
                class="form-control border-0 bg-transparent shadow-none" placeholder="user125@gmail.com" required>

            </div>
          </div>

                    <div class="col-md-8">
                        <label class="form-label fw-semibold d-block mb-4">Gender</label>

                        <div class="d-flex flex-wrap gap-5 align-items-center">

                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input fs-4" type="radio" name="gender" value="male">
                                <label class="form-check-label fw-semibold">Male</label>
                            </div>

                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input fs-4" type="radio" name="gender" value="female">
                                <label class="form-check-label fw-semibold">Female</label>
                            </div>

                            <div class="form-check d-flex align-items-center gap-2">
                                <input class="form-check-input fs-4" type="radio" name="gender" value="other">
                                <label class="form-check-label fw-semibold">Other</label>
                            </div>

                        </div>
                    </div>
                </div>

                <hr class="mb-5">
                
                <!-- Row 3 -->
                <div class="col-md-4">
                    <label class="form-label fw-semibold">Referal Code</label>
                    <div class="input-group bg-light rounded-pill px-2 py-2">
                        
                        <input type="text" name="referral_code" value=""
                        class="form-control border-0 bg-transparent shadow-none" placeholder="FE6967" required>
                        
                    </div>
                </div>

                <div class="col-md-8">
                        <label class="form-label fw-semibold d-block mb-4">Provider Rating</label>
                        
                        <div class="d-flex align-items-center gap-2 fs-4 text-warning">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                            <span class="text-secondary fs-5">(4.7)</span>
                        </div>
                    </div>
                </div>
                <hr class="md-5">
                <div class="row g-4 mb-5">
                
                <div class="col-md-4">
                    <h6 class="fw-bold"> Service Type</h6>
                    <div class="input-group input-group-lg bg-light rounded-pill py-2">
                        
                        <select class="form-select border-0 bg-transparent shadow-none"
                        name="vehicle_type" >
                        <option >Economy</option>
                        <option >Premium</option>
                        <option >Bike</option>
                        <option value="">Rikshaw</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <label class="form-label fw-semibold">Vehicle Reg#</label>
                <div class="input-group bg-light rounded-pill px-2 py-2">
                    
                    <input type="text" name="vehicle_reg" value=""
                class="form-control border-0 bg-transparent shadow-none" placeholder="aed 712" required>

            </div>
          </div>
          <div class="col-md-4">
                <label class="form-label fw-semibold">Vehicle Make, Model, Color </label>
                <div class="input-group bg-light rounded-pill px-2 py-2">
                    
                    <input type="text" name="vehicle_make_model_color" value=""
                class="form-control border-0 bg-transparent shadow-none" placeholder="Toyota Camry Black" required>

            </div>
          </div>





            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
    <button type="submit"
            class="btn text-white fw-bold px-3 py-2 rounded-pill fs-4 border-3 bg-primary"
            >
        UPDATE
    </button>

    <button type="button"
            class="btn text-white fw-bold px-3 py-2 rounded-pill fs-4 border-3 bg-danger"
            >
        DELETE ACCOUNT
    </button>
</div>

        </div>
    </div>
</div>

                <?php else: ?>
                   





                <form>
                    <div class="row g-4">

                        <!-- Old Password -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold fs-4 mb-3">
                                Old Password
                            </label>

                            <div class="input-group input-group-lg">
                                <input type="password"
                                       class="form-control border-0 bg-light rounded-start-pill px-4 py-4"
                                       placeholder="Old Password">

                                <span class="input-group-text border-0 bg-light rounded-end-pill px-4">
                                    <i class="fa-solid fa-eye text-secondary"></i>
                                </span>
                            </div>
                        </div>

                        <!-- New Password -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold fs-4 mb-3">
                                Password
                            </label>

                            <div class="input-group input-group-lg">
                                <input type="password"
                                       class="form-control border-0 bg-light rounded-start-pill px-4 py-4"
                                       placeholder="Password">

                                <span class="input-group-text border-0 bg-light rounded-end-pill px-4">
                                    <i class="fa-solid fa-eye text-secondary"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold fs-4 mb-3">
                                Confirm Password
                            </label>

                            <div class="input-group input-group-lg">
                                <input type="password"
                                       class="form-control border-0 bg-light rounded-start-pill px-4 py-4"
                                       placeholder="Confirm Password">

                                <span class="input-group-text border-0 bg-light rounded-end-pill px-4">
                                    <i class="fa-solid fa-eye text-secondary"></i>
                                </span>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="col-12 text-center mt-4">
                            <button type="submit"
                                    class="btn text-white fw-bold px-5 py-3 rounded-pill fs-4 border-0"
                                    style="background-color:#3b82c4;">
                                Change Password
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php include('./partials/footer.php') ?>